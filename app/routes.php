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
	return View::make('hello');
});

Route::get('/logino', function()
{
	$token = OAuth::token('tumblr');
	print_r($token);
});

/*
*	Pull data from DB and get aggregates
*	Two ways:
*		1. Go through post objects and get info facebook gives
*		2. Go through and get every single name and pull ALL user info, then
* 		   just pull certain data.
*/
Route::get('/dem', function()
{
	//get all pages user manaages
	$posts = DB::table('posts')->get();

	$data = array(
		'who' => array(
			'likes' => array(
				'male' => ''
				'female' => ''
				),
			'shares' => array(
				'male' => ''
				'female' => ''
				),
		'what' => array(
			'' => '',
			),
		'where' => array(
			'likes' => '',
			'shares' => '',
			),
		'when' => array(
			'likes' => '',
			'shares' => '',
			),
		'why' => array(
			'' => '',
			),
		);

	//go through each post and get aggregates
	foreach ($posts as $post) {

		//like stats
		foreach ($likes as $eachuser) {
			//get who info: gender stats
			$eachuser['gender'] == 'male' ? ($male += 1) : ($female += 1);

			//get where info: location of likers

			//get when info: times they liked at
			$eachuser['created_time'];
		}

		//share stats
		$post['shares'];

		//comment stats
		foreach ($comments as $comment) {
			//get who info: gender stats
			$comment['gender'] == 'male' ? ($male += 1) : ($female += 1);

			//get what info: Word Cloud, most frequent products - Alchemy API

			//get where info: location of commentors

			//get when info: times they commented at
			$comment['created_time'];

			//get why info: sentiment, record without subjects, then run analysis subject based on demand - Alchemy API
		}

	}

	return $data;
});
