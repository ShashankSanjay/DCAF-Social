<?php

/**
 * Twitter Retriever
 * 
 * @version	1.0
 */
class TwitterRetriever implements SocialRetriever
{
	const USER_CLASS = "TwitterUser";
	
	const GET_USER_URI = '/statuses/user_timeline.json';
	
	/**
	 * Constructor
	 */
	public function __construct($consumer = null)
	{
		if ($consumer == null) $consumer = OAuth::consumer('twitter');
		$this->consumer = $consumer;
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
	
	public function getPage($id)
	{
		// {implementation code}
	}
	
	/**
	 * 	
	 */
	public function getTweets($username)
	{
		$q = 'search/tweets.json?q=from:' . $username;

		$response = $consumer->request($q);
		$r = json_decode($response, true);

		var_dump($r);
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
	
	public function paginate()
	{
		// {implementation code}
	}
}

?>