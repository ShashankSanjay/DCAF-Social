<?php

/**
 * Facebook Retriever
 * 
 * @version	1.0
 */
class FacebookRetriever implements SocialRetriever
{
	public static USER_CLASS = "FacebookUser";
	public static GET_USER_URI = '/me';
	
	public $consumer;
	
	/**
	 * Constructor
	 */
	public function __construct($consumer = null)
	{
		// parent::__construct(($consumer == null) ? new OAuth:consumer('facebook') : $consumer);
		if ($consumer == null) $consumer = new OAuth::consumer('facebook');
		$this->consumer = $consumer;
	}
	
	/**
	 * Retrieve a Facebook User's Info
	 * 
	 * @param	mixed	$id		(optional) id of user to get; defaults to current user
	 */
	public function getUser($id = null)
	{
		// Get user info
		$call = $this->consumer->request('/me');	// /me/data
		$response = json_decode($call, true);
		
		// Parse data and save into correct DB tables
		$datas = $response['data'];
		
		foreach ($datas as $data)
		{
			// Move through and save page ouath
			$fbpage = new FB_Page;
			$fbpage->FB_Page_ID = $data->id;
			$fbpage->access_token = $data->access_token;
			$fbpage->perms = $data->perms;
			$fbpage->name = $data->name;
			$fbpage->save();
		}
	}
	
	/**
	 * Alias to getContent()
	 */
	public function getPost($id)
	{
		return $this->getContent($id);
	}
	
	public function getContent($id)
	{
		// {implementation code}
	}
	
	public function getPages()
	{
		// Get all page info
		
		$pages = array();
		
		foreach ($pages as $page)
		{
			$db = FB_Pages::find($id);
			// $key = array_push(&$pages, $page);
			$pages[] = $page;
		}
	}
	
	public function getPage($id)
	{
		// get page access-token from db
		$db = FB_Pages::find($id);
		$token = new StdOAuth2Token($db->access_token);
				
		$params = "/feed";
		
		$responses = array();
		
		try {
			$page->getStorage()->storeAccessToken("Facebook", $token);
			// specific field calls from Alex's email will not work with /me node, must use id?fields=...
			$call = $page->request('/me' . $params);
		} catch (FacebookApiException $e) {
			// CHANGE: WRITE TO LOG FILE
			var_dump($e);
		}
		$response = json_decode($call, true);
		
		// parse through, go through pagination
		
		/**
		 * Accepts decoded fb json, returns unpaginated array of arrays
		 * Secondary arrays are returned with name from fb, ie. post, likes
		 */
		$response = self::paginate($response);
		array_push($responses, $response);
		
		// save info to db
		
		if (isset($responses['posts']))
		{
			// parse each post and save into db
			foreach ($responses['posts'] as $key => $arr)
			{
				$p = new FBPost();
				$p->content = $arr['content'];
				// $p-> = $arr;
				$p->save();
				
				// Attach to appropriate models, ie. fb user and page
				$p->FacebookUser->attach($userid);
			}
		}
		
		/*
		// Define scopes and fields
		$scope = "/posts.fields(likes)";
		
		foreach ($data as $page) {
			// Get data from fb
			try {
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
}

?>