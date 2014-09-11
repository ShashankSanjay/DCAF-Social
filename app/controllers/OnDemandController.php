<?php

use OAuth\OAuth2\Token\StdOAuth2Token;
// require_once('alchemyapi_php/alchemyapi.php');
	

class OnDemandController extends BaseController
{
	public $fbConsumer;
	public $twConsumer;
	public $gpConsumer;
	
	public $networks = array(
		'facebook'	=> array('abbr' => 'FB', 'accountEndpoint' => '/me'),
		'twitter'	=> array('abbr' => 'TW', 'accountEndpoint' => 'account/verify_credentials.json'),
		'google'	=> array('abbr' => 'GP', 'accountEndpoint' => ''),
		'instagram'	=> array('abbr' => 'IG', 'accountEndpoint' => '')
	);
	
	/**
	 * Display the search and social logins
	 * 
	 * Save oauth in db, and pull fb, gp accounts, and save page oauth's.
	 *
	 * @return View
	 */
	public function index()
	{
		$newProfileAdded = false;
		
		// for each network
		foreach ($this->networks as $network => $props)
		{
			$db = 'oauth_'.$network;
			
			if (OAuth::hasToken($network))
			{
				$token = OAuth::token($network);
				
				// now that we have the access token, we need to make an API request
				// to determine if we already have this user in our database
				$consumer = OAuth::consumer($network);
				$consumer->getStorage()->storeAccessToken(ucfirst($network), $token);
				$response = $consumer->request($props['accountEndpoint']);
				$response = json_decode($response, true);
				
				$networkUser = ucfirst($network).'User';
				
				if ($networkUser::find($response['id']) == null)
				{
					// SO Q&A #2201335
					// $networkUser = new ${!${''} = ucfirst($network).'User'}();
					
					$networkUser = new $networkUser;

					$networkUser->{$networkUser->getKeyName()} = $response['id'];
					
					if ($network == 'twitter')
					{
						$columns = DB::connection()
						  ->getDoctrineSchemaManager()
						  ->listTableColumns($props['abbr'] . '_Users');
						// echo '<pre>';
						foreach ($response as $key => $val) {
							if (isset($columns[$key])) {
								//var_dump($key);
								$networkUser->{$key} = $val;
							}
						}
					}
					else
					{
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
					$facebookRetriever->getAllUserData($networkUser);

					// By now, user is saved into db, and so have pages + basic info on them
					//	So next, get page likes and posts
					
					foreach ($networkUser->FacebookPage()->get() as $key => $page) {
						//echo $page->name;
						$facebookRetriever->getPage($page, $networkUser);
						$dcaf_message[] = 'Page ' . $page->name . ' retrieved.';
					}
					/*
					Mail::later(5, 'emails.dcaf.retriever.pagesRetrieved', array('dcaf_message' => $dcaf_message), function($message)
					{
						$message->to('ssanja1@pride.hofstra.edu', 'Admin')->subject('Page has finished retrieval');
					});
					*/
					$newProfileAdded = true;
				} else {
					Session::flash('notice', 'Your current account is already linked!');
				}
			} 
		}
		
		if ($newProfileAdded) {
			Session::flash('notice', 'Your account was linked!');
			return View::make('site.onePage');
		} else {
			return View::make('site.onePage');
		}
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
			
			// dispatch to the appropiate parse method
			$props = $network::parseURL($urlParts);
			
			echo '<pre>';
			var_dump($urlParts);
			var_dump($props);
			echo '</pre>';
			
			// dispatch to the appropiate lookup method and
			// get the id of the item saved to the database
			
			// self::$network($urlParts, $urlParts['path']);
			// self::$network($props['post_id']);
			$item_id = self::$network($urlParts);
			
			/*
			$call = $fbConsumer->request($url);
			$response = json_decode($call);
			*/
			
			if ($network == "facebook")
			{
				$fbPost = FacebookPost::find($item_id);
				
				$results = self::what($fbPost->message);
				
				return View::make('site.onePage', array('results' => $results));
			}
		}
	}

	public function facebook($purl, $path)
	{
		// Format page/type-of-interaction/id
		$arrpath = explode('/', $path);
		
		// Find page
		$fbPage = FacebookPage::where('link', '=', $purl['scheme'] . '://' . $purl['host'] . '/' . $arrpath[1])->first();
		var_dump($arrpath[1]);
		// die();
		
		if (empty($fbPage)) {
			var_dump($purl['scheme'] . '://' . $purl['host'] . '/' . $arrpath[1]);
			die();
		}

		$consumer = OAuth::consumer('facebook');
		$consumer->getStorage()->storeAccessToken("Facebook", new StdOAuth2Token($fbPage->access_token));

		$post['id'] = $arrpath[3];
		$facebookRetriever = new FacebookRetriever();
		
		$facebookRetriever->processPost($post, $fbPage, $fbPage->access_token);
		$fbPost = FacebookPost::find($post['id']);
		
		$test_text = $fbPost->message;
		$alchemyapi = new AlchemyAPI();

		echo '<pre>';
		// Keywords
		echo 'Checking keywords . . . ';
		$response = $alchemyapi->keywords('text', $test_text, null);
		var_dump($response);
		// Sentiment
		echo 'Checking sentiment . . . ';
		$response = $alchemyapi->sentiment('text', $test_text, null);
		var_dump($response);
		// Sentiment Targeted
		echo 'Checking targeted sentiment . . . ';
		$response = $alchemyapi->sentiment_targeted('text', $test_text, 'heart', null);
		var_dump($response);

		if ($response['status'] == 'OK')
		{
			echo '## Response Object ##', PHP_EOL;
			echo 'this is analysis for: ' . $fbPost->message; 
			echo print_r($response);

			echo '## Document Sentiment ##', PHP_EOL;
			echo 'sentiment: ', $response['docSentiment']['type'], PHP_EOL;
			
			if (array_key_exists('score', $response['docSentiment'])) {
				echo 'score: ', $response['docSentiment']['score'], PHP_EOL;
			}
		} else {
			echo 'Error in the sentiment analysis call: ', $response['statusInfo'];
		}
		
		/*
		$query = '?fields=likes,comments.fields(id),shares,message,message_tags,name,from';
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
