<?php

use OAuth\OAuth2\Token\StdOAuth2Token;
//require_once('alchemyapi_php/alchemyapi.php');
	

class OnDemandController extends BaseController
{
	public $fbConsumer;
	public $twConsumer;
	public $gpConsumer;
	
	public $networks = array(
		'facebook'	=> array('abbr' => 'FB', 'accountEndpoint' => '/me', 'newAccount' => false, 'updatedAccount' => false),
		'twitter'	=> array('abbr' => 'TW', 'accountEndpoint' => 'account/verify_credentials.json', 'newAccount' => false, 'updatedAccount' => false),
		'google'	=> array('abbr' => 'GP', 'accountEndpoint' => '', 'newAccount' => false, 'updatedAccount' => false),
		'instagram'	=> array('abbr' => 'IG', 'accountEndpoint' => '', 'newAccount' => false, 'updatedAccount' => false)
	);
	
	/**
	 * Display the search and social logins
	 *
	 *	Save oauth in db, and pull fb, gp accounts, and save page oauth's.
	 *
	 * @return View
	 */
	public function index()
	{
		//$newProfileAdded = false;

		foreach ($this->networks as $network => $props)
		{
			$db = 'oauth_'.$network;
			if (OAuth::hasToken($network)) {
				$token = OAuth::token($network);
				if ($network == 'twitter') 
					$token = null;
				if (!is_null($token))
				{
					// now that we have the access token, we need to make an API request
					// to determine if we already have this user in our database
					$consumer = OAuth::consumer($network);
					
					$consumer->getStorage()->storeAccessToken(ucfirst($network), $token);
					$response = $consumer->request($props['accountEndpoint']);
					$response = json_decode($response, true);
					
					$networkUser = ucfirst($network).'User';
					
					if (is_null($networkUser = $networkUser::find($response['id'])))
					{
						// SO Q&A #2201335
						// $networkUser = new ${!${''} = ucfirst($network).'User'}();
						$props['newAccount'] = true;
						$networkUser = ucfirst($network).'User';
						$networkUser = new $networkUser;
						$networkUser->FB_User_ID = $response['id'];
					}
					$networkUser->{$networkUser->getKeyName()} = $response['id'];
					
					if ($network == 'twitter') {
						$columns = DB::connection()
						  ->getDoctrineSchemaManager()
						  ->listTableColumns($props['abbr'] . '_Users');
						//echo '<pre>';
						foreach ($response as $key => $val) {
							if (isset($columns[$key])) {
								//var_dump($key);
								$networkUser->{$key} = $val;
							}
						}
					} else {
						$dcaf_message = array();
						foreach ($networkUser->dcaf_fields as $field) {
							try {
								//var_dump($field);
								$networkUser->{$field} = $response[$field];
							} catch (Exception $e) {
								$dcaf_message[] = $field;
							}
						}
						if (count($dcaf_message) > 1) {
							Mail::later(5, 'error.registerNetworksError', array('dcaf_message' => $dcaf_message), function($message)
							{
							    $message->to('ssanja1@pride.hofstra.edu', 'Admin')->subject('Error on linking');
							});
						}
					}
					
					/*
					echo '<pre>';
					echo '$response:'."\n";
					print_r($response);
					echo '$networkUser:'."\n";
					print_r($networkUser);
					die('</pre>');
					*/
					
					$networkUser->save();
					$props['updatedAccount'] = true;
					//var_dump();
					if (is_null($oauth = DB::table($db)->where('access_token', $token->getAccessToken())->first()))
					// if (count(DB::select('select * from '.$db.' where access_token = ?', array($token->getAccessToken()))) == 0)
					{
						// Now the access token is either an update for a user or is a new one

						// check
						if (is_null($oauth = DB::table($db)->where('user_id', $response['id'])->first())) {
							// if it is null, then this is a new user, new token
							// Save the new token into db
							$oauthId = DB::table($db)->insertGetId(array('user_id' => $response['id'], 'access_token' => $token->getAccessToken(), 'expire_time' => $token->getEndOfLife()));
						} else {
							// update to existing user
							DB::table($db)->where('user_id', $response['id'])->update(array('access_token' => $token->getAccessToken(), 'expire_time' => $token->getEndOfLife()));
						}
					}

					$facebookRetriever = new FacebookRetriever();

					$dcaf_message = array();
					
					//echo '$token: '.$networkUser->access_token."\n";
					$networkUser->access_token = $token->getAccessToken();
					$facebookRetriever->getAllUserData($networkUser);

					// By now, user is saved into db, and so have pages + basic info on them
					//	So next, get page likes and posts
					/*
					foreach ($networkUser->FacebookPage()->get() as $key => $page) {
						//echo $page->name;
						$facebookRetriever->getPage($page, $networkUser);
						$dcaf_message[] = 'Page ' . $page->name . ' retrieved.';
					}*/
					/*
					Mail::later(5, 'emails.dcaf.retriever.pagesRetrieved', array('dcaf_message' => $dcaf_message), function($message)
					{
						$message->to('ssanja1@pride.hofstra.edu', 'Admin')->subject('Page has finished retrieval');
					});
					*/
					
				}
			}
		}

		foreach ($this->networks as $network => $props) {
			if ($props['newAccount'])
				Session::flash('notice', 'Your ' . $network . ' account was linked!');
			if ($props['updatedAccount'])
				Session::flash('notice', 'Your ' . $network . ' account has been updated');
		}
		
		return View::make('site.onePage');
		
	}
	
	public function lookUp()
	{
		$url = Input::get('url');
		
		if (empty($url))
		{
			Session::flash('notice', 'oops, looks like you did not input a url');
			return View::make('site.onePage');
		}
		else
		{
			$urlParts = parse_url($url);
			$host = null;
			
			if (!isset($urlParts['host']))
			{
				Session::flash('notice', 'oops, we couldn\'t recognize that url');
				return View::make('site.onePage');
			}
			
			$domainParts = explode('.', $urlParts['host']);
			
			if (count($domainParts) == 3) {
				// url included www
				$network = $domainParts[1];
			} else {
				// url didn't include www
				$network = $domainParts[0];
			}
			
			if (!isset($this->networks[$network]))
			{
				$networks = '';
				foreach ($this->networks as $network => $props) { $networks .= ', '.$network; }
				Session::flash('sorry, we only support '.substr($networks, 2));
				return View::make('site.onePage');
			}
			
			$network = ucfirst($network);
			
			$urlParts['path']		= mb_strtolower(substr($urlParts['path'],1));
			// $pathParts	=  $urlParts['pathParts']	= pathinfo($urlParts['path']);
			$urlParts['pathPart']	= dirname($urlParts['path']);	// $pathParts['dirname'];
			$urlParts['gparentDir']	= dirname($urlParts['pathPart']);
			$urlParts['parentDir']	= basename($urlParts['pathPart']);
			$urlParts['filePart']	= basename($urlParts['path']);	// $pathParts['basename'];
			
			// dispatch to correct lookup
			$props = $network::parseURL($urlParts);
			
			/*echo '<pre>';
			var_dump($urlParts);
			var_dump($props);
			echo '</pre>';*/
					
			if (isset($props['entity'])) {
				//
				$obj['id'] = $network::$props['entityLookUp']($props);
			} else {
				Session::flash('danger', 'oops, we couldn\'t recognize that url');
				return View::make('site.onePage');
			}

			
			$socialobj = $props['entity']::find($obj['id']);
			/*} catch (Exception $e) {
				// probably means the class was not found
				Session::flash('danger', 'oops, we aren\t tracking that type of interaction just yet, but we\re working on it!');
				return View::make('site.onePage');
			}*/

			// Check comments
			//echo '<pre>';
			//var_dump($socialobj->FBComment()->get());
			//echo '</pre>';
			$comments = $socialobj->FBComment()->get();
			if (!is_null($comments)) {
				foreach ($comments as $fbComment) {
					$cr[] = self::what($fbComment->message);
				}
			}

			// Comments aggregator
			if (count($cr) > 0) {
				foreach ($cr as $commentWhat) {
					echo '<pre>';
					var_dump($commentWhat);
					echo '</pre>';
				}
			}

			//	Get demo's for $response
			
			if (!is_null($socialobj)) {
				$results = self::what($socialobj->message);
				return View::make('site.onePage', array('results' => $results));
			} else {
				if (!Session::get('danger'))
					Session::flash('danger', 'Whoops, something went wrong with the url you inputted');
				return View::make('site.onePage');
			}

			// dispatch to correct lookup and save requested obj in db, and return it's id
			//self::$network($props['post_id']);
			//$post['id'] = self::$network($urlParts);
			
			/*
			$call = $fbConsumer->request($url);
			$response = json_decode($call);
			*/
			//	Get demo's for $response
			/*$fbPost = FacebookPost::find($post['id']);
			
			if (!is_null($fbPost)) {
				$results = self::what($fbPost->message);
				return View::make('site.onePage', array('results' => $results));
			} else {
				if (!Session::get('danger'))
					Session::flash('danger', 'Whoops, something went wrong with the url you inputted');
				return View::make('site.onePage');
			}*/
		}
	}
	
	public function facebook($post_id)
	//public function facebook($purl)
	{
		// Format page/type-of-interaction/id
		/*$arrpath = explode('/', $purl['path']);
		echo '<pre>';
		var_dump($purl);
		
		if (strstr($purl['query'], "fbid")) {
			$e = explode('&', $purl['query']);
			$f = explode('=', $e[0]);
			$fbid = $f[1];
			echo 'found it';
		} else {
			var_dump($purl['query']);
			echo "didn't find it";
		}
		echo '</pre>';
		*/
		// Find page
		/*$fbPage = FacebookPage::where('link', '=', $purl['scheme'] . '://' . $purl['host'] . '/' . $arrpath[1])->first();
		//var_dump($arrpath[1]);
		//die();
		if (empty($fbPage)) {
			Session::flash('danger', 'Whoops, there seems to be an error with that url. Either we do not support it, or you may not have admin rights to this page');
			return View::make('site.onePage');
		}*/
		
		$consumer = OAuth::consumer('facebook');
		$consumer->getStorage()->storeAccessToken("Facebook", new StdOAuth2Token($fbPage->access_token));

		//$post['id'] = $post_id;
		$post['id'] = $arrpath[3];
		$facebookRetriever = new FacebookRetriever();
		
		$facebookRetriever->processPost($post, $fbPage, $fbPage->access_token);
		
		/*$query = '?fields=likes,comments.fields(id),shares,message,message_tags,name,from';
		$call = $consumer->request($arrpath[3] . $query);
		$response = json_decode($call);
		*/
		
		return ($post['id']);
	}

	public function what($text)
	{
		if ($text == null) {
			Log::error('error in OnDemandController::what()');
			return;
		}
		
		$alchemyapi = new AlchemyAPI();

		//echo '<pre>';

		//Keywords
		//echo 'Checking keywords . . . ', PHP_EOL;
		// alchemyapi returns array ordered by relevance, so only handle first 3
		$keywordsalch = $alchemyapi->keywords('text', $text, null);
		$keywords = array();
		//var_dump($keywords);
		for ($i=0; $i<3; $i++) {
	        //echo 'keyword: ', $keywordsalch['keywords'][$i]['text'], PHP_EOL;
	        //echo 'relevance: ', $keywordsalch['keywords'][$i]['relevance'], PHP_EOL;
	        $keywords['words'][] = ['text' => $keywordsalch['keywords'][$i]['text'], 'relevance' => $keywordsalch['keywords'][$i]['relevance'], 'sentiment' => '0'];
	        //echo 'sentiment: ', $keyword['sentiment']['type'], PHP_EOL;
	    }

		//Sentiment
		//echo 'Checking sentiment of the overall message. . . ', PHP_EOL;
		$overallSentiment = $alchemyapi->sentiment('text', $text, null);
		//var_dump($overallSentiment);
		//echo 'sentiment: ', $overallSentiment['docSentiment']['type'], PHP_EOL;
		$keywords['overallSentiment']['type'] = $overallSentiment['docSentiment']['type'];
		$keywords['overallSentiment']['score'] = $overallSentiment['docSentiment']['score'];
    	//echo 'score: ', $overallSentiment['docSentiment']['score'], PHP_EOL;
		//Sentiment Targeted
		//echo 'Checking targeted sentiment towards top three keywords/phrases. . . ', PHP_EOL;
		foreach ($keywords['words'] as $key => $keyword) {
			try {
		        //echo 'keyword: ', $keyword['text'], PHP_EOL;
		        $response = $alchemyapi->sentiment_targeted('text', $text, $keyword['text'], null);
		        //echo 'sentiment: ', $response['docSentiment']['type'], PHP_EOL;
		        //echo 'relevance: ', $response['docSentiment']['score'], PHP_EOL;
		        $keywords['words'][$key]['sentiment'] = ['score' => isset($response['docSentiment']['score']) ? $response['docSentiment']['score'] : 0, 'type' => $response['docSentiment']['type']];
			} catch (Exception $e) {
				//var_dump($response);
				echo '<pre>';
				echo 'this had a problem ';
				var_dump($keyword);
				echo '</pre>';
			}
		}
		//echo '</pre>';

		//return results
		return $keywords;
	}

	public function twitter()
	{
		//
	}

	public function google()
	{
		//
	}

}
