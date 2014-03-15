<?php

/**
 * Social Retriever Controller
 * 
 * @version	1.0
 */
class SocialRetrieverController extends BaseController
{
	/**********************
	 * Instance Variables *
	 **********************/
	
	public $consumer;	// OAuth::Consumer instance
	public $pages;
	
	/**
	 * Pass each call a OAuth::Consumer object
	 */
	public function __construct(/* $access_token */)
	{
		/*
		$consumer = new OAuth::consumer('facebook');
		$token = new StdOAuth2Token($access_token); 
		$consumer->getStorage()->storeAccessToken("Facebook", $token);
		$this->consumer = $consumer;
		*/
	}
	
	/**
	 * Cron job function to be called
	 */
	public function getAllData()
	{
		// Call SocialRetriver model to retrieve Facebook data
		
		// Call SocialRetriver model to retrieve Google Plus data
		
		// Call SocialRetriver model to retrieve Twitter data
		
		// Call SocialRetriver model to retrieve Instagram/Tumblr data
	}
}

?>