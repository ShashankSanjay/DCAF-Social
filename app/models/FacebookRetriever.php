<?php

/**
 * Facebook Retriever
 * 
 * @version	1.0
 */
class FacebookRetriever implements SocialRetriever
{
	const USER_CLASS = "FacebookUser";
	const GET_USER_URI = '/me';
	
	public $consumer;
	
	/**
	 * Constructor
	 */
	public function __construct($consumer = null)
	{
		// parent::__construct(($consumer == null) ? new OAuth:consumer('facebook') : $consumer);
		if ($consumer == null) $consumer = OAuth::consumer('facebook');
		$this->consumer = $consumer;
	}
	
	public function getAllUserData($token)
	{
		$this->consumer->getStorage()->storeAccessToken("Facebook", $token);
		// $user = $this->getUser();
		
		// $user = FacebookUser::
		
		// Parse data and save into correct DB tables
		foreach ($user['data'] as $data)
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
	 * Retrieve a Facebook User's Info
	 * 
	 * @param	mixed	$id		(optional) id of user to get; defaults to current user
	 */
	public function getUser($id = null)
	{
		// Get user info
		$call = $this->consumer->request($id ? $id : '/me');	// /me/data
		$response = json_decode($call, true);
		
		$facebookUser = new FacebookUser();
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
	
	/**
	 * Retrieve several Facebook pages
	 */
	public function getPages($ids = array())
	{
		// Get all page info
		
		$pages = array();
		
		foreach ($ids as $id)
		{
			$db = FB_Pages::find($id);
			// $key = array_push(&$pages, $page);
		}
		
		return $pages;
	}
	
	public function getPage($id)
	{
		// get page access-token from db
		$db = FacebookPage::find($id);
		$token = new StdOAuth2Token($db->access_token);
		$this->consumer->getStorage()->storeAccessToken("Facebook", $token);
		
		// Define scopes and fields
		// $scope = "/posts.fields(likes)";
		
		try {
			// specific field calls from Alex's email will not work with /me node, must use id?fields=...
			$response = $consumer->request('/me/feed');
		} catch (FacebookApiException $e) {
			// CHANGE: WRITE TO LOG FILE
			var_dump($e);
		}
		$response = json_decode($response, true);
		
		// parse through, go through pagination
		
		/**
		 * Accepts decoded fb json, returns unpaginated array of arrays
		 * Secondary arrays are returned with name from fb, ie. post, likes
		 *
		 * $response = self::paginate($response);
		 * $responses[] = $response;
		*/
		
		
	}
	
	protected function processPost($page_response)
	{
		// print("\nProcessing posts for page: ".$page_response['name']."\n");
		
		// Parse data and save into db
		if (isset($response['posts']))
		{
			// $posts = $page_response['posts']['data'];
			
			// parse each post and save into db
			foreach ($response['posts'] as $key => $arr)
			{
				$post = new FacebookPost();
				$post->content = $arr['content'];
				$post->save();
				
				// Attach to appropriate models, ie. fb user and page
				$post->FacebookUser->attach($userid);
			}
		}
	}
	
	public function paginate()
	{
		// {implementation code}
	}
}

?>