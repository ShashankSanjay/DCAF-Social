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

Route::get('/', function ()
{
	return View::make('hello');
});

Route::get('/logino', function ()
{
	
	echo '<pre>';
	
	//$token = OAuth::token('tumblr');
	$token = Session::get('lusitanian_oauth_token');
	
	print("here are all the networks you have logged into!\n \n");
	
	/**foreach ($token as $key => $toke) {
		print_r($toke);
		print("\n");
	}**/

	print_r($token);

	print("\n"."If you want to sign into additional networks, click here: ");
	echo '<a href="http://shashanksanjay.com/socialapp">Home Page</a>';
	
	print("\nTo clear this data, click here: ");
	echo '<a href="http://shashanksanjay.com/socialapp/delete">Delete</a>';
	//$session = Session::get('Twitter');
	//print_r($session);
	
	echo  '</pre>';

	/* *
	echo '<pre>';
	$facebook = OAuth::consumer('facebook');
	$response = $facebook->request('/me/accounts');
	$yo = json_decode($response);
	print_r($yo);

	echo '</pre>';**/
});

Route::get('/fballpages', function ()
{
	echo '<pre>';
	$facebook = OAuth::consumer('facebook');
	$response = $facebook->request('/me/accounts');
	$yo = json_decode($response, true);
	//print_r($yo);
	$data = $yo['data'];
	foreach ($data as $page) {
		
		print("\nYou manage the " . $page['name'] . " page" . "\n with access token: " . $page['access_token']."\n");
			
	}


	echo '</pre>';
});

Route::get('/fballpagesallposts', function ()
{
	echo '<pre>';
	$facebook = OAuth::consumer('facebook');
	$response = $facebook->request('/me/accounts');
	$yo = json_decode($response, true);
	//print_r($yo);
	$data = $yo['data'];
	$scope = "posts";
	print("This page shows all posts for all pages\n");
	foreach ($data as $page) {
		try {
			$r = $facebook->request("/".$page['id']."?fields=" . $scope);			
		} catch (FacebookApiException $e) {
			var_dump($e);
		}
		$d = json_decode($r, true);
		if (isset($d['posts'])) {
			$data = $d['posts']['data'];
			print("\nPosts for page: " . $page['name'] . "\n");
			foreach ($data as $post) {
				print_r($post);
				print("\n");
			}
		}
		//print_r($d);
		
	}


	echo '</pre>';
});

Route::get('/delete', function() 
{
	Session::flush();

	return Redirect::to('/');
});


/**
*	Twitter stuff
**/
Route::get('/twtweets', function()
{
	echo '<pre>';
	$twitter = OAuth::consumer('twitter');
	$response = $twitter->request('/statuses/user_timeline');
	$yo = json_decode($response, true);
	print_r($yo);
	echo '</pre>';
});

/**
*	Google stuff
*/
Route::get('/gpposts', function()
{
	$google = OAuth::consumer('google');
	$response = $google->request('https://www.googleapis.com/oauth2/v1/userinfo');
	$yo = json_decode($response, true);

	echo '<pre>' . print_r($yo) . '</pre>';
});


/**
 * Pull data from DB and get aggregates
 * Two ways:
 *   1. Enumerate through post objects and get info facebook gives
 *   2. Enumerate through and get every single name and pull ALL user info, then
 *      just pull certain data.
 */
Route::get('/dem', function ()
{
	// get all pages user manaages
	$posts = DB::table('posts')->get();
	
	$data = array(
		'who' => array(
			'likes' => array(
				'male' => '',
				'female' => ''
			),
			'shares' => array(
				'male' => '',
				'female' => ''
			),
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
		
	// go through each post and get aggregates
	foreach ($posts as $post) {
		
		// like stats
		foreach ($likes as $eachuser) {
			// get who info: gender stats
			$eachuser['gender'] == 'male' ? ($male += 1) : ($female += 1);
			
			// get where info: location of likers
			
			// get when info: times they liked at
			$eachuser['created_time'];
		}

		// share stats
		$post['shares'];

		// comment stats
		foreach ($comments as $comment) {
			// get who info: gender stats
			$comment['gender'] == 'male' ? ($male += 1) : ($female += 1);
			
			// get what info: Word Cloud, most frequent products - Alchemy API
			
			// get where info: location of commentors
			
			// get when info: times they commented at
			$comment['created_time'];
			
			// get why info: sentiment, record without subjects, then run analysis subject based on demand - Alchemy API
		}
	}
	
	return $data;
});
