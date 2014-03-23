<?php
// class \OAuth\OAuth2\Token\StdOAuth2Token extends \OAuth\Common\Token\AbstractToken implements TokenInterface
// interface \OAuth\OAuth1\Token\TokenInterface extends \OAuth\Common\Token\TokenInterface

// \OAuth\Common\Token\TokenInterface
// \Thomaswelton\LaravelOauth\Common\Storage\LaravelSession
use OAuth\OAuth2\Token\StdOAuth2Token;


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
	public function getAllUserData($user)
	{
		//if (Config::get('app.debug')) { echo __METHOD__.'($access_token = "'.$access_token.'")'; }
		
		//$this->setAccessToken($access_token);
		
		// $user = $this->getUser();

		$this->setAccessToken($user->access_token);

		// Make call to fb /me/accounts
		try {
			$call = $this->consumer->request('/me/accounts');
		} catch (Exception $e) {
			echo 'failed in getting user accounts';
		}
		$response = json_decode($call);

		
		// Parse data and save into correct DB tables
		foreach ($response->data as $page)
		{
			// move through and save page
			$fbpage = FacebookPage::find($page->id);
			if (empty($fbpage->FB_Page_ID)) {
				$fbpage = new FacebookPage();
				$fbpage->FB_Page_ID = $page->id;
				$fbpage->access_token = $page->access_token;
				//$fbpage->perms = $page->perms;
				$fbpage->name = $page->name;
				$fbpage->category = $page->category;
				$fbpage->save();
			}
			$fbpage->FacebookUser()->attach($user);
		}
	}
	
	/**
	 * Retrieve a FacebookUser's Info
	 * 
	 * @param	mixed	$id		(optional) id of user to get; defaults to current user
	 */
	public function getUser($id = null)
	{
		//if (Config::get('app.debug')) { echo __METHOD__.'($id = "'.$id.'")'; }
		
		// Get user info
		if (is_null($id)) {
			$call = $this->consumer->request($id ? $id : '/me');	// /me/data
			$response = json_decode($call, true);

			$id = $response['id'];
			
		}

		// Search for user in db
		$fbUser = FacebookUser::find($id);

		// If user not found, create one
		if ($fbUser::find($response['id']) == null)
		{
			//$query = '?fields=';
			$query = '/me';
			$call = $this->consumer->request($id . $query);
			$response = json_decode($call, true);

			$fbUser = new FacebookUser;

			foreach ($fbUser->dcaf_fields as $field) {
				try {
					//var_dump($field);
					$fbUser->{$field} = $response[$field];
				} catch (Exception $e) {
					Mail::later(5, 'error.registerNetworksError', array('dcaf_message' => $e), function($message)
					{
					    $message->to('ssanja1@pride.hofstra.edu', 'Admin')->subject('Error on linking');
					});
				}
				$fbUser->save();
			}
		}
		
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
	
	public function getPage($page)
	{
		// get page access-token from db
		//$page = FacebookPage::find($user);
		//$token = new StdOAuth2Token($page->access_token);
		$this->setAccessToken($page->access_token);
		
		// Define query and fields. This is just pt. 1, still need media stuff, albums videos..
		$query = '?fields=likes,posts.fields(id)';
		
		try {
			// specific field calls from Alex's email will not work with /me node, must use id?fields=...
			$response = $this->consumer->request($page->FB_Page_ID . $query);
		} catch (Exception $e) {
			// CHANGE: WRITE TO LOG FILE
			echo 'failed in get page';
			var_dump($page->name);
			//var_dump($e);
			die();
		}
		$response = json_decode($response, true);
		echo '<pre>';

		/*foreach ($response as $key => $value) {
			if (isset($response[$key]))
			{
				//
			}
		}*/
		if (isset($response['likes']))
		{
			//
		}
		
		if (isset($response['posts']))
		{
			foreach ($response['posts']['data'] as $post) {
				$this->processPost($post, $page);
				//var_dump($post['id']);
				
			}
			
		}
		//	breakdown of response, in order they are received
		/*$page_likes = $response['likes'];
		$posts = $response['posts'];

		foreach ($posts['data as $post) {
			//	Need to write paging for: likes, comments, and shares
			$post_shares = $post['shares'];
			$post_id = $post['id'];
			$post_time = $post['created_time'];
			$post_likes = $post['likes'];
			$post_comments = $post['comments'];
		}*/

		// parse through, go through pagination
		
		/**
		 * Accepts decoded fb json, returns unpaginated array of arrays
		 * Secondary arrays are returned with name from fb, ie. post, likes
		 *
		 * $response = self::paginate($response);
		 * $responses[] = $response;
		*/
		
		
	}
	
	protected function processPost($post, $page)
	{
		// print("\nProcessing posts for page: ".$page_response['name']."\n");
		
		// Parse data and save into db
		
		// $posts = $page_response['posts']['data'];
		
		// parse each post and save into db
		/*foreach ($response['posts'] as $key => $arr)
		{
			$post = new FacebookPost();
			$post->content = $arr['content'];
			$post->save();
			
			// Attach to appropriate models, ie. fb user and page
			$post->FacebookUser->attach($userid);
		}*/
		//echo 'in processPost';
		$query = '?fields=likes,comments.fields(id),shares,message,message_tags,name,from';

		try {
			// specific field calls from Alex's email will not work with /me node, must use id?fields=...
			$response = $this->consumer->request($post['id'] . $query);
		} catch (Exception $e) {
			// CHANGE: WRITE TO LOG FILE
			echo "failed";
			var_dump($post['id']);
			//var_dump($e);
			die();
		}
		$response = json_decode($response, true);

		if (isset($response['likes'])) {
			//$this->process_likes($response['likes'], $post['id'])
			//echo 'likes included';
		}
		if (isset($response['comments'])) {
			//$this->process_comments($response['comments'], $post['id'])
			//echo 'comments included';
		}

		//var_dump($response);
		//var_dump($page->name);
		
		$fbPost = FacebookPost::find($post['id']);
		if (empty($fbPost->FB_Post_ID)) {
			$fbPost = new FacebookPost;
			$fbPost->FB_Post_ID = $response['id'];
			$fbPost->created_time = $response['created_time'];
			$fbPost->save();
			//$fbPost-> = ;
		}

		if (isset($response['from'])) {
			if (!($response['from']['id'] == $page->FB_Page_ID)) {
				// Check if user in db, else make one, then associate with post
				$fbPost = FacebookPost::find($post['id']);
				$user = $this->getUser($response['from']['id']);
				$fbPost->message = $response['message'];
				$fbPost->FBUser()->associate($user);
			} 
		}
		// else author is page, so we don't need the content

		// even if post previously existed in db, run relation in case of shares
		$fbPost->FBPage()->associate($page);
		$fbPost->save();
		
	}
	
	public function paginate()
	{
		// {implementation code}
	}
}

?>