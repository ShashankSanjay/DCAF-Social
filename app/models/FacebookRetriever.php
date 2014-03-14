<?php

/**
 * Facebook Retriever
 * 
 * @version	1.0
 */
class FacebookRetriever extends SocialRetriever
{
	public static USER_CLASS = "FacebookUser";
	
	public static GET_USER_URI = '/me';
	
	/**
	 * Constructor
	 */
	public function __construct($consumer)
	{
		parent::__construct(($consumer == null) ? new OAuth:consumer('facebook') : $consumer);
	}
	
	/**
	 * Facebook Stuff
	 * Pass each call a OAuth::Consumer object
	 */
	public function getUser($consumer)
	{
		// Get user pages
		$call = $consumer->request('/me');
		$response = json_decode($call, true);
	}
	
	public function fbPageInfo($consumer, $response)
	{
		// Get all page info
		$call = $consumer->request('/me/accounts');
		$response = json_decode($call, true);

		$data = $response['data'];

		foreach ($data as $page) {
			# code...
			//$page['access_token'];
			//$page['id'];
			$consumer->setToken($page['access_token']);
			$c = $consumer->request('/me');
			$r = json_decode($c, true);
			var_dump($r);
		}
		
		/*
		// Define scopes and fields
		$scope = "/posts.fields(likes)";
		
		foreach ($data as $page)
		{
			// Get data from fb
			try {
				//$r = $consumer->request("/".$page['id']."?fields=" . $scope);
				$r = $consumer->request("/".$page['id'] . $scope);
			} catch (FacebookApiException $e) {
				var_dump($e);
			}
			$d = json_decode($r, true);
			
			// Parse data and save into db

			if (isset($d['posts']))
			{
				$data = $d['posts']['data'];
				print("\nPosts for page: " . $page['name'] . "\n");
				foreach ($data as $post) {
					print_r($post);
					print("\n");
				}
			}
		}
		*/
	}
}