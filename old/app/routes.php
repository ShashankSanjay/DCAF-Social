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

//league
Route::get('login/fb', 'FacebookController@login');

//TwitterOauth
Route::get('login/twitter', 'TwitterController@login');

//league
Route::get('login/google', 'GoogleController@login');

//mod on TwitterOauth
Route::get('login/tumblr', 'TumblrController@login');
