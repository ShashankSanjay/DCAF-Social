<?php

use OAuth\OAuth2\Token\StdOAuth2Token;


class OnDemandController extends BaseController {

	public $fbConsumer;
	public $twConsumer;
	public $gpConsumer;
	/**
	 * Display the search and social logins
	 *
	 *	Save oauth in db, and pull fb, gp accounts, and save page oauth's.
	 *
	 * @return View
	 */
	public function index()
	{
		$networks = array(
			'facebook'	=> array('abbr' => 'FB', 'accountEndpoint' => '/me'),
			'twitter'	=> array('abbr' => 'TW', 'accountEndpoint' => 'account/verify_credentials.json'),
			'google'	=> array('abbr' => 'GP', 'accountEndpoint' => ''),
			'instagram'	=> array('abbr' => 'IG', 'accountEndpoint' => '')
		);

		$newProfileAdded = false;

		foreach ($networks as $network => $props)
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
			die('oops, looks like you did not input a url');
		}
		else
		{
			$urlParts = parse_url($url);
			$props = array();
			$host = null;
			
			if (isset($urlParts['host']))
			{
				$domainParts = explode('.', $urlParts['host']);
				
				if (count($domainParts) == 3) {
					// url included www
					$network = $domainParts[1];
				} else {
					// url didn't include www
					$network = $domainParts[0];
				}
			}
			
			$path = mb_strtolower(substr($urlParts['path'],1));
			$pathParts = pathinfo($path);
			$pathPart = $pathParts['dirname'];
			$gparentDir = dirname($pathPart);
			$parentDir = basename($pathPart);
			$filePart = $pathParts['basename'];
			
			echo '<pre>';
			var_dump($urlParts);
			var_dump($pathParts);
			echo '$path:       '.$path."\n";
			echo '$gparentDir: '.$gparentDir."\n";
			echo '$pathPart:   '.$pathPart."\n";
			echo '$filePart:   '.$filePart."\n";
			echo '$parentDir:  '.$parentDir."\n";
			echo '</pre>';
			
			if ($pathPart == '.' && ctype_digit($filePart))
			{
				$props['post_id'] = $filePart;
			}
			else if ($gparentDir == 'pages' && ctype_digit($filePart))
			{
				$props['page_name'] = $parentDir;
				$props['post_id'] = $filePart;
			}
			else if (isset($urlParts['query']))
			{
				parse_str($urlParts['query'], $queryFields);
				
				if ($path == 'permalink.php')
				{
					if (isset($queryFields['id']) && ctype_digit($queryFields['id']))
					{
						$props['page_id'] = $queryFields['id'];
					}
					
					if (isset($queryFields['story_fbid']) && ctype_digit($queryFields['story_fbid']))
					{
						$props['post_id'] = $queryFields['story_fbid'];
					}
				}
				else if ($path == 'photo.php')
				{
					// facebook wall (timeline) id
					if (isset($queryFields['fbid']) && ctype_digit($queryFields['fbid']))
					{
						$props['photo_id'] = $queryFields['fbid'];
					}
					
					if (isset($queryFields['set']))
					{
						$ids = explode('.', $queryFields['set']);
						
						if ($ids[0] == 'a')
						{
							$props['wall_id'] = $ids[1];
							$props['album_id'] = $ids[2];
							$props['page_id'] = $ids[3];
						}
						else if ($ids[0] == 'p')
						{
							$props['photo_id'] = $ids[1];
						}
					}
				}
				else if ($path == 'album.php')
				{
					// facebook wall (timeline) id
					if (isset($queryFields['fbid']) && ctype_digit($queryFields['fbid']))
					{
						$props['wall_id'] = $queryFields['fbid'];
					}
					
					// page id
					if (isset($queryFields['id']) && ctype_digit($queryFields['id']))
					{
						$props['page_id'] = $queryFields['id'];
					}
					
					// album id
					if (isset($queryFields['aid']) && ctype_digit($queryFields['aid']))
					{
						$props['album_id'] = $queryFields['aid'];
					}
				}
			}
			
			echo '<pre>';
			var_dump($props);
			echo '</pre>';
			
			die();
			
			if (isset($urlParts['host']))
				$host = explode('.', $urlParts['host']);
			
			if (count($host) > 2) {
				// this means their url included www
				$network = $host[1];
			} else {
				//they didn't include www, just sn.com
				$network = $host[0];
			}
			
			// dispatch to correct lookup
			self::$network($urlParts, $urlParts['path']);
			
			/*
			$call = $fbConsumer->request($url);
			$response = json_decode($call);
			*/
			//	Get demo's for $response
		}
	}

	public function facebook($purl, $path)
	{
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

		$consumer = OAuth::consumer('facebook');
		$consumer->getStorage()->storeAccessToken("Facebook", new StdOAuth2Token($fbPage->access_token));

		$post['id'] = $arrpath[3];
		$facebookRetriever = new FacebookRetriever();
		
		$facebookRetriever->processPost($post, $fbPage, $fbPage->access_token);
		$fbPost = FacebookPost::find($post['id']);
		
		var_dump($fbPost->message);
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