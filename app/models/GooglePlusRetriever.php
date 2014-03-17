<?php

/**
 * Social Retriever base class
 * 
 * @version	1.0
 */
class GooglePlusRetriever implements SocialRetriever
{
	const GET_USER_URI = 'https://www.googleapis.com/oauth2/v1/userinfo';
	
	public $consumer;
	
	/**
	 * Constuctor
	 */
	public function __construct($consumer = null)
	{
		// parent::__construct($consumer);
		// if ($consumer == null) $consumer = OAuth::consumer('googleplus');
		$this->consumer = $consumer;
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
		// {implementation code}
	}
	
	public function paginate()
	{
		// {implementation code}
	}
}

?>