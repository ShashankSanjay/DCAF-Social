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
	 * Service provided by lusitanian
	 * 
	 * <<abstract>>                                         <<interface>>
	 * \OAuth\Common\Service\AbstractService - - - - - - -> \OAuth\Common\Service\ServiceInterface
	 *                 ^                      implements                    ^
	 * <<abstract>>    |                                    <<interface>>   |
	 * \OAuth\OAuth1\Service\AbstractService - - - - - - -> \OAuth\OAuth1\Service\ServiceInterface
	 *                 ^                      implements
	 *                 |
	 * @var \OAuth\OAuth1\Service\Twitter
	 */
	public $service;
	
	/**
	 * Constructor
	 */
	public function __construct($service = null)
	{
		if ($service == null) $service = OAuth::consumer('twitter');
		$this->service = $service;
	}
	
	/**
	 * Stores the access_token, so it can be sent in
	 * the Authorization header for subsequent API calls.
	 */
	public function setAccessToken($access_token)
	{
		// getStorage() returns an instance of \Thomaswelton\LaravelOauth\Common\Storage\LaravelSession, which implements TokenStorageInterface
		// see also: \OAuth\Common\Token\TokenInterface
		$this->service->getStorage()->storeAccessToken("Twitter", new StdOAuth2Token($access_token));
	}
	
	/**
	 * Twitter Stuff
	 */
	public function getUser($id = null)
	{
		// Get user info
		
		$response = $service->request('/statuses/user_timeline.json');
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

		$response = $service->request($q);
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