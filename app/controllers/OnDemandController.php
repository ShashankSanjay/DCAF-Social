<?php

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
						foreach ($networkUser->dcaf_fields as $field) {
							
							try {
								//var_dump($field);
								$networkUser->{$field} = $response[$field];
							} catch (Exception $e) {
								Mail::later(5, 'error.registerNetworksError', array('error' => $e), function($message)
								{
								    $message->to('ssanja1@pride.hofstra.edu', 'Admin')->subject('Error on linking');
								});
							}
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

					if (is_null($oauth = DB::table($db)->where('access_token', $token->getAccessToken())->first()))
					// if (count(DB::select('select * from '.$db.' where access_token = ?', array($token->getAccessToken()))) == 0)
					{
						// Save the token into db
						$oauthId = DB::table($db)->insertGetId(array('user_id' => $response['id'], 'access_token' => $token->getAccessToken(), 'expire_time' => $token->getEndOfLife()));
					}
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

	public function fblookUp($url)
	{
		$call = $fbConsumer->request($url);
		$response = json_decode($call);

		//	Get demo's for $response
	}

	public function twlookUp()
	{
		//
	}

	public function gplookUp()
	{
		//
	}

}