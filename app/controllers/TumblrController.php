<?php

class TumblrController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	public function login()
	{
		/*	
		if (Input::has('oauth_token'))
		{
		    	//Return from redirect
			// Oauth token
			$token = Input::get('oauth_token');

			// Verifier token
			$token_secret = Input::get('oauth_token_secret');

			// Request access token
			var_dump($token);

			$client->setToken($token, $token_secret);
			//echo "<pre>";
			//print_r($accessToken);	
		}
		else {
			$c = Config::get('tumblr.tumblr');
			$client = new Tumblr($c['consumer_key'], $c['consumer_secret']);
			/** /$client->setToken($c['token'], $c['token_secret']);
			$userInfo = $client->getUserInfo();
			var_dump($userInfo);
			/** /
			$client->getRequestHandler()->setBaseUrl('http://www.tumblr.com/');
			$req = $client->getRequestHandler()->request('POST', 'oauth/request_token', array (
			  'oauth_callback' => $c['callbackUrl'] ));
			$client->getRequestHandler()->setBaseUrl('http://api.tumblr.com/');
			$result = $req->body->__toString();
			$url = $req->headers;
			print_r($url);
			//header('Location: ' . $url);
			//Redirect::to($req);
			exit;
		}
		try{
		    // Setup OAuth token and secret
		    $userInfo = $client->getUserInfo();

		    print_r($userInfo);

		}  catch(Exception $e) {
		    // Error
		    echo $e->getMessage();
		}
	}*/

	if (Input::has('oauth_token')) {
		print_r(Input::all());
	}
	else {
		OAuth::login('tumblr')->redirect('http://shashanksanjay.com/socialapp/login/tumblr');
	}

}
