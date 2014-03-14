<?php

/**
 * Twitter Retriever
 * 
 * @version	1.0
 */
class TwitterRetriever extends SocialRetriever
{
	public static USER_CLASS = "TwitterUser";
	
	public static GET_USER_URI = '/statuses/user_timeline.json';
	
	/**
	 * Constructor
	 */
	public function __construct($consumer)
	{
		parent::__construct($consumer);
	}
	
	/**
	 * Twitter Stuff
	 */
	public function twUserInfo($consumer)
	{
		// Get user info
		$response = $consumer->request('/statuses/user_timeline.json');
		$data = json_decode($response, true);
	}
}

?>