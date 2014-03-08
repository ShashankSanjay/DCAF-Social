<?php

class SocialRetriever
{
	//

	/*
	*	Facebook Stuff
	*	Pass each call a OAuth::Consumer object
	*/

	public function fbUserInfo($consumer) {
		// Get user pages
		$call = $consumer->request('/me');
		$response = json_decode($call, true);
	}

	public function fbPageInfo($consumer, $response) {
		// Get all page info
		$call = $consumer->request('/me/accounts?fields=access_token');
		$response = json_decode($call, true);

		$data = $response['data'];

		
		/*
		// Define scopes and fields
		$scope = "/posts.fields(likes)";

		foreach ($data as $page) {
			// Get data from fb
			try {
				//$r = $consumer->request("/".$page['id']."?fields=" . $scope);
				$r = $consumer->request("/".$page['id'] . $scope);
			} catch (FacebookApiException $e) {
				var_dump($e);
			}
			$d = json_decode($r, true);
		*/
			// Parse data and save into db

			/*
			if (isset($d['posts'])) {
				$data = $d['posts']['data'];
				print("\nPosts for page: " . $page['name'] . "\n");
				foreach ($data as $post) {
					print_r($post);
					print("\n");
				}
			}*/
			
		}
	}

	/*
	*	Twitter Stuff
	*/

	public function twUserInfo($consumer) {
		// Get user info
		$response = $consumer->request('/statuses/user_timeline.json');
		$data = json_decode($response, true);
	}

	/*
	*	Google Stuff
	*/

	public function gpUserInfo($consumer) {
		// Get user pages
		$response = $consumer->request('https://www.googleapis.com/oauth2/v1/userinfo');
		$data = json_decode($response, true);
	}

	public function gpPageInfo($consumer) {
		// Get user pages
	}

	/*
	*	Instagram/tumblr
	*/


}