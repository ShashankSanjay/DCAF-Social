<?php

/**
 * Twitter Retriever
 * 
 * @version	1.0
 */
class TwitterRetriever implements SocialRetriever
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
	public function getUser($id = null)
	{
		// Get user info
		$response = $consumer->request('/statuses/user_timeline.json');
		$data = json_decode($response, true);
	}
	
	/**
	 * Alias to getContent()
	 */
	public function getTweet($id)
	{
		return $this->getContent($id);
	}
	
	/**
	 * Retieves Tweets
	 */
	public function getContent($id)
	{
		// {implementation code}
	}
}

?>