<?php
/**
 * class for fetching user info from social networks
 */
class SocialRetriever extends Retriever
{
	/**
	 * Constructor
	 * 
	 * Note: parent::__construct() needs to be called explicitly
	 */
	function __construct($id, $uname, $args = array())
    {
		$this->uid = $id;
        $this->uname = $uname;
		
        $defaults = array(
			'role'			=> 'user',
			'logged_in'		=> false,
			'active'		=> true,
		);
		
		$r = array_merge($defaults,$args);
		extract($r);
		
		// parent::__construct($id, $uname, $args);
		
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
	
	public function fetchFacebookAccount()
	{
		$facebook = OAuth::consumer('facebook');
		$token = Session::get('lusitanian_oath_token');
		
		// if not logged in
		if (!isset($token['Facebook'])) return false;
		
		// make the api call to retrieve user admin pages
		$response = json_decode($facebook->request('/me/accounts'), true);
		
		$ids = array();
		$data = $response['data'];
		foreach ($data as $key => $page) 
		{
			$ids[$key] = $page['id'];			
		}
		
		// make batch call to get all page data
		
		
		// parse that shii tho
		
		
		// save that shii tho
	}
	
	/*
	if (isset(OAuth::twitter))
	{
		$calls = 'x, x, x, x'
		$twitter = OAuth::consumer('twitter');
		$response = $twitter->request('/me/accounts');
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
}
?>