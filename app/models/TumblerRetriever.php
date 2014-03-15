<?php

/**
 * Tumbler Retriever
 * 
 * @version	1.0
 */
class TumblerRetriever extends SocialRetriever
{
	/**
	 * Instagram/tumblr
	 */
	
	/**
	 * Constuctor
	 */
	public function __construct($consumer)
	{
		parent::__construct($consumer);
	}
	
	/**
	 * Tumbler Stuff
	 */
	public function getUser($consumer)
	{
		// Get user info
		$response = $consumer->request('');
		$data = json_decode($response, true);
	}
}

?>