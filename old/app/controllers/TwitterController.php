<?php

class TwitterController extends \BaseController {

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
		if (Input::has('oauth_token'))
		{
		    	//Return from redirect
			// Oauth token
			$token = Input::get('oauth_token');

			// Verifier token
			$verifier = Input::get('oauth_verifier');

			// Request access token
			$accessToken = Twitter::oAuthAccessToken($token, $verifier);

			//echo "<pre>";
			//print_r($accessToken);	
		}
		else {
			//Redirect user to twitter
			// Reqest tokens
			$tokens = Twitter::oAuthRequestToken();
			// Redirect to twitter
			Twitter::oAuthAuthorize(array_get($tokens, 'oauth_token'));
		    exit;
		}
		try{
		    // Setup OAuth token and secret
		    Twitter::setOAuthToken($accessToken['oauth_token']);
		    Twitter::setOAuthTokenSecret($accessToken['oauth_token_secret']);

		    // Get tweets
		    $timeline = Twitter::statusesUserTimeline($accessToken['user_id']);
		    // Display tweets
		    echo "<pre>";
		    print_r($timeline);

		}  catch(Exception $e) {
		    // Error
		    echo $e->getMessage();
		}
	}

		/*
		$twitter = new Twitter();
		$c = Config::get('twitter.twitter');
		$oauth = $twitter->oAuth($c['consumer_key'], $c['consumer_secret']); //$c['oauth_token'], $c['oauth_token_secret']);
		

		$requestToken = $oauth->getRequestToken();//($c['callback']);
		$url = $oauth->getAuthorizeUrl($requestToken);
		$oauth->getAccessToken();

		try {
			$statuses = $twitter->call('statuses/home_timeline');
			foreach ($statuses as $status) {
				echo $status['user']['name'].': '.$status['text'].PHP_EOL;
			}
		} catch (Exception $e) {
			return $e;
		}*/

}

?>