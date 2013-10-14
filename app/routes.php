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
	return View::make('user');
});


Route::get('login/fb', 'FacebookController@login');

/*
Route::get('login/twitter', 'TwitterController@login');


Route::get('login/google', 'GoogleController@login');


Route::get('login/tumblr', 'TumblrController@login');
*/
// Visit http://site.com/twitter-redirect
Route::get('twitter-redirect', function(){
    // Reqest tokens
    $tokens = Twitter::oAuthRequestToken();

    // Redirect to twitter
    Twitter::oAuthAuthorize(array_get($tokens, 'oauth_token'));
    exit;
});

// Redirect back from Twitter to http://site.com/twitter-auth
Route::get('/twitter-auth', function(){
    // Oauth token
    $token = Input::get('oauth_token');

    // Verifier token
    $verifier = Input::get('oauth_verifier');

    // Request access token
    $accessToken = Twitter::oAuthAccessToken($token, $verifier);

    dd($accessToken);
});