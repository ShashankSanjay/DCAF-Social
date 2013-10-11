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


Route::get('login/twitter', 'TwitterController@login');


Route::get('login/google', 'GoogleController@login');


Route::get('login/tumblr', 'TumblrController@login');