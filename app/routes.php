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
	/*
	echo '<pre>';
	*/
	$facebook = OAuth::consumer('facebook');
	$response = $facebook->request('/me/accounts');
	$yo = json_decode($response, true);
	//print_r($yo);
	$data = $yo['data'];
	/*
	echo '$facebook->request("/me/accounts")';
	foreach ($data as $page) {
		print("\nYou manage the " . $page['name'] . " page" . "\n with access token: " . $page['access_token']."\n");
	}
	echo '</pre>';	
	*/
	
	//FacebookRetriever::batchCall(array($data[0]['id']), $data[0]['access_token']);

	$ch = curl_init('https://graph.facebook.com/');
	$pageIDs = array($data[0]['id']);
	foreach ($pageIDs as $key => $page)
	{
				
		// set the url, number of POST vars, POST data
		// curl_setopt($ch, CURLOPT_URL, $url);
		// curl_setopt($ch, CURLOPT_FILE, $fp);
		// curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_POST, 2);
		curl_setopt($ch, CURLOPT_POSTFIELDS, 'access_token=' . $data[0]['access_token'] . '&batch=[{"method":"GET", "relative_url":"/' . $data[0]['id'] . '?fields=id,access_token,likes,admins,albums,conversations,events,feed,insights,links,locations,posts,questions,statuses,tagged,videos"}]');
		
		$result = json_decode(curl_exec($ch));
		echo '<pre>';
		print_r($result);
		echo '</pre>';
	}
	curl_close($ch);
	
});

Route::get('/fballpagesallposts', function ()
{
	echo '<pre>';
	$facebook = OAuth::consumer('facebook');
	$response = $facebook->request('/me/accounts');
	$yo = json_decode($response, true);
	//print_r($yo);
	$data = $yo['data'];
	$scope = "posts.fields(likes)";

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
	$response = $twitter->request('/statuses/user_timeline.json');
	$yo = json_decode($response, true);
	//print($twitter->request('/account/settings'));
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

	//echo '<pre>' . print_r($yo) . '</pre>';
	var_dump($yo);
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
