<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	//return View::make('user');
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

});


Route::get('login/fb', 'FacebookController@login');


Route::get('login/twitter', 'TwitterController@login');


Route::get('login/google', 'GoogleController@login');


Route::get('login/tumblr', 'TumblrController@login');
