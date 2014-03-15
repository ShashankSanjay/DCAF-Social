<?php

/**
 * Social Retriever base class
 * 
 * @version	1.0
 */
class GooglePlusRetriever implements SocialRetriever
{
	public static GET_USER_URI = 'https://www.googleapis.com/oauth2/v1/userinfo';
	
	/**
	 * Constructor
	 */
	public function __construct($consumer)
	{
		parent::__construct($consumer);
	}
	
	/**
	 * Google Stuff
	 */
	public function getUser($id = null)
	{
		// Get user pages
		$response = $consumer->request('https://www.googleapis.com/oauth2/v1/userinfo');
		$data = json_decode($response, true);
	}

	public function getPage($id)
	{
		// Get user pages
	}
	
	public function getContent($id)
	{
		
	}
}

?>