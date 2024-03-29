<?php
/**
 * class for fetching user info from social networks
 */
class SocialRetriever extends Retriever
{
	/**
	 * Constructor
	 * 
	 * @param	array	$consumers	an array of network-name (e.g. facebook) to consumer object pairs
	 * @param	array	$args		(optional) additional arguments
	 */
	function __construct($consumers = array(), $args = array())
    {
		$this->consumers = $consumers;
		
        $defaults = array(
			'role'			=> 'user',
			'logged_in'		=> false,
			'active'		=> true,
		);
		
		$r = array_merge($defaults,$args);
		extract($r);
		
		$this->logged_in = $logged_in;
		$this->disabled = !$active;
		$this->role = $role;
    }
	
	/***** Instance Methods *****/
	
	/*** Setters ***/
	
	public function setRole($role = 'user')
	{
		$this->role = $role;
	}
	
	public function login()
	{
		$this->logged_in = true;
	}
	
	
	/*** Getters ***/
	
	public function getID()
	{
		return $this->uid;
	}
	
	public function getUsename()
	{
		return $this->uname;
	}
	
	/*** Utility Methods ***/
	
	/**
	 * Fetch User's Facebook Pages
	 */
	public function fetchFacebookPages()
	{
		// make the api call to retrieve user admin pages
		$response = $this->callApi('facebook', '/me/accounts');
		
		// if not logged in
		if (!$response) return false;
		
		// $page_ids = array();
		$data = $response['data'];
		
		// batch processing of the pages
		foreach ($data as $key => $page) 
		{
			// $page_ids[$key] = $page['id'];
			
			// make call to get page data
			
			// parse it
			
			// write it to the DB
		}
		
		return $response;
	}
	
	/**
	*
	*/
	public function fetchTwitterAccount()
	{
		//
	}

	/*
	if (isset(OAuth::twitter))
	{
		//make array of all params to call
		$calls = array(
			'/statuses/mentions_timeline.json',
			'/statuses/retweets_of_me',
			'/followers/ids.json',
		);

		$twitter = OAuth::consumer('twitter');

		foreach ($calls as $call)
		{  
			//make calls
			$response = json_decode($twitter->request($call));
		}
	}
	
	if (isset(OAuth::google))
	{
		$google = OAuth::consumer('google');
		$response = $google->request('/me/accounts');
	}
	
	if (isset(OAuth::tumblr))
	{
		$tumblr = OAuth::consumer('tumblr');
		$response = $tumblr->request('/me/accounts');
	}
	*/

	//heyo pseudo: model of relations between fb and twitter
	public function ab()
	{
		page or twitter account
			likes or followers

		posts or tweets
			likes or favorites
			comments or replies
				likes or favorites
						retweets
						replies
			shares or retweets

	}

}
?>