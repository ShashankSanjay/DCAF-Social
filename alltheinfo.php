<?php
/**
*	php script to get all info from each logged in network
*/	

if (isset(OAuth::facebook))
{
	//make the api call to retrieve user admin pages
	$facebook = OAuth::consumer('facebook');
	$response = json_decode($facebook->request('/me/accounts'), true);
	
	$ids = array();
	$data = $response['data'];
	foreach ($data as $key => $page) 
	{
		$ids[$key] = $page['id'];			
	}

	//make batch call to get all page data



	//parse that shii tho


	//save that shii tho
}

if (isset(OAuth::twitter))
{
	$calls = 'x, x, x, x'
	$twitter = OAuth::consumer('twitter');
	$response = $twitter->request('/me/accounts');
}

if (isset(OAuth::google))
{
	$google = OAuth::consumer('google');
	$response = $google->request('/me/accounts');
}

if (isset(OAuth::tumblr))
{
	$tumblr = OAuth::consumer('tumblr');
	$response = $tumblr->request('/me/accounts');
}

?>