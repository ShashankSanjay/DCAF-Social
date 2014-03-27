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
			}

			/*
			if (is_null($oauth = DB::table($db)->where('user_id', $this->user->id)->first()))
			// if (count(DB::select('select * from '.$db.' where access_token = ?', array($token->getAccessToken()))) == 0)
			{
				// Save the token into db
				$oauthId = DB::table($db)->insertGetId(array('user_id' => $this->user->id, 'access_token' => $token->getAccessToken(), 'expire_time' => $token->getEndOfLife()));
			}*/
		}

		return View::make('site.onePage');
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