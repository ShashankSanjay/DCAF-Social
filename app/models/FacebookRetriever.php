<?php
// class \OAuth\OAuth2\Token\StdOAuth2Token extends \OAuth\Common\Token\AbstractToken implements TokenInterface
// interface \OAuth\OAuth1\Token\TokenInterface extends \OAuth\Common\Token\TokenInterface

// \OAuth\Common\Token\TokenInterface
// \Thomaswelton\LaravelOauth\Common\Storage\LaravelSession
use OAuth\Common\Token\StdOAuth2Token;

/**
 * Facebook Retriever
 * 
 * https://www.facebook.com/apps/site_scraping_tos_terms.php
 * 
 * @version	1.0
 */
class FacebookRetriever implements SocialRetriever
{
	const USER_CLASS = "FacebookUser";
	const GET_USER_URI = '/me';
	
	public $consumer;

	/**
	*	Credentials
	
	public $credentials = array(
        'key' => '494865777271597',
        'secret' => '55ad9a3e7e53fd0fd7727de6e6787da6',
        'scope' => 'email, read_stream, manage_pages, publish_actions'
    );
	*/
	/**
	 * Constructor
	 */
	public function __construct($consumer = null)
	{
		// parent::__construct(($consumer == null) ? OAuth:consumer('facebook') : $consumer);
		if ($consumer == null) $consumer = OAuth::consumer('facebook');
		$this->consumer = $consumer;
	}
	
	public function setAccessToken($access_token)
	{
		$this->consumer->getStorage()->storeAccessToken("Facebook", new StdOAuth2Token($access_token));
	}

	public function getLongAccessToken($short_token)
	{
		$extend_url = "https://graph.facebook.com/oauth/access_token?client_id=494865777271597&client_secret=55ad9a3e7e53fd0fd7727de6e6787da6&grant_type=fb_exchange_token&fb_exchange_token=" . $short_token;

		$resp = file_get_contents($extend_url);

		parse_str($resp,$output);

		var_dump($output);

		$token = $output['access_token'];
		
		//$this->setAccessToken($token);

		$oauthId = DB::table('oauth_facebook')->insertGetId(array('user_id' => Auth::User()->id, 'access_token' => $token));//, 'expire_time' => $token->getEndOfLife()));
	}
	
	/**
	 * @param	int  $id	FacebookUser id
	 */
	public function getAllUserData($id)
	{
		if (Config::get('app.debug')) { echo __METHOD__.'($access_token = "'.$access_token.'")'; }
		
		$this->setAccessToken($access_token);
		
		// $user = $this->getUser();
		$user = FacebookUser::find($id);
		
		// $user = FacebookUser::
		
		// Parse data and save into correct DB tables
		foreach ($user['data'] as $data)
		{
			// move through and save page
			$fbpage = new FB_Page();
			$fbpage->FB_Page_ID = $data->id;
			$fbpage->access_token = $data->access_token;
			$fbpage->perms = $data->perms;
			$fbpage->name = $data->name;
			$fbpage->save();
		}
	}
	
	/**
	 * Retrieve a FacebookUser's Info
	 * 
	 * @param	mixed	$id		(optional) id of user to get; defaults to current user
	 */
	public function getUser($id = null)
	{
		if (Config::get('app.debug')) { echo __METHOD__.'($id = "'.$id.'")'; }
		
		// Get user info
		$call = $this->consumer->request($id ? $id : '/me');	// /me/data
		$response = json_decode($call, true);
		
		$facebookUser = new FacebookUser();
	}
	
	/**
	 * Alias to getContent()
	 */
	public function getPost($id)
	{
		return $this->getContent($id);
	}
	
	public function getContent($id)
	{
		// {implementation code}
	}
	
	/**
	 * Retrieve several Facebook pages
	 */
	public function getPages($ids = array())
	{
		// Get all page info
		
		$pages = array();
		
		foreach ($ids as $id)
		{
			$db = FB_Pages::find($id);
			// $key = array_push(&$pages, $page);
		}
		
		return $pages;
	}
	
	public function getPage($id)
	{
		// get page access-token from db
		$db = FacebookPage::find($id);
		$token = new StdOAuth2Token($db->access_token);
		$this->consumer->getStorage()->storeAccessToken("Facebook", $token);
		
		// Define scopes and fields
		// $scope = "/posts.fields(likes)";
		
		try {
			// specific field calls from Alex's email will not work with /me node, must use id?fields=...
			$response = $consumer->request('/me/feed');
		} catch (FacebookApiException $e) {
			// CHANGE: WRITE TO LOG FILE
			var_dump($e);
		}
		$response = json_decode($response, true);
		
		// parse through, go through pagination
		
		/**
		 * Accepts decoded fb json, returns unpaginated array of arrays
		 * Secondary arrays are returned with name from fb, ie. post, likes
		 *
		 * $response = self::paginate($response);
		 * $responses[] = $response;
		*/
		
		
	}
	
	protected function processPost($page_response)
	{
		// print("\nProcessing posts for page: ".$page_response['name']."\n");
		
		// Parse data and save into db
		if (isset($response['posts']))
		{
			// $posts = $page_response['posts']['data'];
			
			// parse each post and save into db
			foreach ($response['posts'] as $key => $arr)
			{
				$post = new FacebookPost();
				$post->content = $arr['content'];
				$post->save();
				
				// Attach to appropriate models, ie. fb user and page
				$post->FacebookUser->attach($userid);
			}
		}
	}
	
	public function paginate()
	{
		// {implementation code}
	}
}

?>