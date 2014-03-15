<?php

/**
 * Social Retriever Base-class
 * 
 * @version	1.0
 */
class SocialRetriever
{
	/**********************
	 * Instance Variables *
	 **********************/
	
	public $consumer;
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
}
