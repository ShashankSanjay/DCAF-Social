<?php

class SocialRetriever
{
	//

	public $consumer;
	public $pages;
	/*
	*	Facebook Stuff
	*	Pass each call a OAuth::Consumer object
	*/
	public function __construct($access_token) {
		//
		$consumer = new OAuth::consumer('facebook');
		$token = new StdOAuth2Token($access_token); 
		$consumer->getStorage()->storeAccessToken("Facebook", $token);
		$this->consumer = $consumer;
	}

	public function fbUserInfo() {
		// Get user info
		$call = $this->consumer->request('/me/data');
		$response = json_decode($call, true);

		// Parse data and save into correct DB's
		$datas = $response['data'];
		foreach ($datas as $data) {
			// Move through and save page ouath
			$fbpage = new FB_Page;
			$fbpage->FB_Page_ID = $data->id;
			$fbpage->access_token = $data->access_token;
			$fbpage->perms = $data->perms;
			$fbpage->name = $data->name;
			$fbpage->save();
		}
	}

	public function fbPageInfo($id) {
		//either instantiate new consumers every page or do...

		// Get all page info

		$pages = array();

		foreach ($ids as $id) {
			// Get ids from db
			$db = FB_Pages::find($id);
			$page = new OAuth::consumer('facebook');
			$token = new StdOAuth2Token($db->access_token);
			$page->getStorage()->storeAccessToken("Facebook", $token);

			$pages = array_push($pages, $page); 
		}

		foreach ($pages as $page) {
			$c = $this->consumer->request('/me');
			$r = json_decode($c, true);
		}

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