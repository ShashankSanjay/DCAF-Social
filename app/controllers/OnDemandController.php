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
						Mail::later(5, 'error.registerNetworksError', array('dcaf_message' => $dcaf_message), function($message)
						{
						    $message->to('ssanja1@pride.hofstra.edu', 'Admin')->subject('Error on linking');
						});
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
			
			echo '<pre>';
			var_dump($urlParts);
			var_dump($props);
			echo '</pre>';
			
			if (!isset($props['post_id']))
			{
				Session::flash('notice', 'oops, we couldn\'t recognize that url');
				return View::make('site.onePage');
			}
			
			// dispatch to correct lookup
			self::$network($props['post_id']);
			
			/*
			$call = $fbConsumer->request($url);
			$response = json_decode($call);
			*/
			//	Get demo's for $response
		}
	}
	
	public function facebook($post_id)
	// public function facebook($purl, $path)
	{
		/*
		// Format page/type-of-interaction/id
		$arrpath = explode('/', $path);
		
		// Find page
		$fbPage = FacebookPage::where('link', '=', $purl['scheme'] . '://' . $purl['host'] . '/' . $arrpath[1])->first();
		var_dump($arrpath[1]);
		//die();
		if (empty($fbPage)) {
			var_dump($purl['scheme'] . '://' . $purl['host'] . '/' . $arrpath[1]);
			die();
		}
		*/
		
		$consumer = OAuth::consumer('facebook');
		$consumer->getStorage()->storeAccessToken("Facebook", new StdOAuth2Token($fbPage->access_token));

		$post['id'] = $post_id;
		$facebookRetriever = new FacebookRetriever();
		
		$facebookRetriever->processPost($post, $fbPage, $fbPage->access_token);
		$fbPost = FacebookPost::find($post['id']);
		
		$test_text = $fbPost->message;
		$alchemyapi = new AlchemyAPI();

		echo '<pre>';
		//Keywords
		echo 'Checking keywords . . . ';
		$keywords = $alchemyapi->keywords('text', $test_text, null);
		var_dump($keywords);
		foreach ($keywords['keywords'] as $keyword) {
	        echo 'keyword: ', $keyword['text'], PHP_EOL;
	        echo 'relevance: ', $keyword['relevance'], PHP_EOL;
	        echo 'sentiment: ', $keyword['sentiment']['type'], PHP_EOL;
	    }
		//Sentiment
		echo 'Checking sentiment . . . ';
		$overallSentiment = $alchemyapi->sentiment('text', $test_text, null);
		var_dump($overallSentiment);
		echo 'sentiment: ', $overallSentiment['docSentiment']['type'], PHP_EOL;
    	echo 'score: ', $overallSentiment['docSentiment']['score'], PHP_EOL;
		//Sentiment Targeted
		echo 'Checking targeted sentiment . . . ';
		foreach ($keywords['keywords'] as $keyword) {
	        echo 'keyword: ', $keyword['text'], PHP_EOL;
	        $response = $alchemyapi->sentiment_targeted('text', $test_text, $keyword, null);
	        echo 'sentiment: ', $response['docSentiment']['type'], PHP_EOL;
    		echo 'relevance: ', $response['docSentiment']['score'], PHP_EOL;
			var_dump($response);
		}
		/*$query = '?fields=likes,comments.fields(id),shares,message,message_tags,name,from';
		$call = $consumer->request($arrpath[3] . $query);
		$response = json_decode($call);
		*/
		
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