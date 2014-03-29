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
						// Save the token into db
						$oauthId = DB::table($db)->insertGetId(array('user_id' => $response['id'], 'access_token' => $token->getAccessToken(), 'expire_time' => $token->getEndOfLife()));
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
		if (empty($url)) {
			var_dump('oops, looks like you did not input a url');
		}
		$purl = parse_url($url);

		if (isset($purl['host']))
			$host = explode('.', $purl['host']);

		if (count($host) > 2) {
			// this means their url included www
			$network = $host[1];
		} else {
			//they didn't include www, just sn.com
			$network = $host[0];
		}

		// dispatch to correct lookup
		self::$network($purl, $purl['path']);

		/*
		$call = $fbConsumer->request($url);
		$response = json_decode($call);
		*/
		//	Get demo's for $response
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
		$facebookRetriever->processPost($post, $fbPage);
		/*$query = '?fields=likes,comments.fields(id),shares,message,message_tags,name,from';
		$call = $consumer->request($arrpath[3] . $query);
		$response = json_decode($call);
		*/
		var_dump();
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