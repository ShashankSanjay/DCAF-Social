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
	
	/**
	 * Service provided by lusitanian
	 * 
	 * <<abstract>>                                         <<interface>>
	 * \OAuth\Common\Service\AbstractService - - - - - - -> \OAuth\Common\Service\ServiceInterface
	 *                 ^                      implements                    ^
	 * <<abstract>>    |                                    <<interface>>   |
	 * \OAuth\OAuth2\Service\AbstractService - - - - - - -> \OAuth\OAuth2\Service\ServiceInterface
	 *                 ^                      implements
	 *                 |
	 * @var	\OAuth\OAuth2\Service\Facebook
	 */
	public $service;
	
	public $debug = false;
	public $verbose = false;
	
	/**
	 * Credentials
	 *
	public $credentials = array(
        'key' => '494865777271597',
        'secret' => '55ad9a3e7e53fd0fd7727de6e6787da6',
        'scope' => 'email, read_stream, manage_pages, publish_actions'
    );
	*/
	
	/**
	 * Constructor
	 */
	public function __construct($service = null)
	{
		// parent::__construct(($service == null) ? OAuth:consumer('facebook') : $service);
		if ($service == null) $service = OAuth::consumer('facebook');
		$this->service = $service;
		$this->debug = $this->debug || Config::get('app.debug');
	}
	
	public function setAccessToken($access_token)
	{
		$this->service->getStorage()->storeAccessToken("Facebook", new StdOAuth2Token($access_token));
	}
	
	public function getLongAccessToken($short_token)
	{
		$extend_url = "https://graph.facebook.com/oauth/access_token?client_id=494865777271597&client_secret=55ad9a3e7e53fd0fd7727de6e6787da6&grant_type=fb_exchange_token&fb_exchange_token=".$short_token;
		
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
			$call = $this->service->request('/me/accounts?fields=id,website,link,category,name,access_token,perms');
		} catch (Exception $e) {
			echo 'failed in getting user accounts';
		}
		$response = json_decode($call);

		if (isset($response->error)) {
			echo '<pre>';
			echo 'attempting to get user data in FacebookRetriever....';
			var_dump($user->access_token);
			var_dump($response->error);
			echo "</pre>";
			return;
		}
		// Parse data and save into correct DB tables
		foreach ($response->data as $page)
		{
			// move through and save page
			$fbpage = FacebookPage::find($page->id);
			if (empty($fbpage->FB_Page_ID)) 
				$fbpage = new FacebookPage();
			//update
			$fbpage->FB_Page_ID = $page->id;
			$fbpage->access_token = $page->access_token;
			$fbpage->link = $page->link;
			//$fbpage->perms = $page->perms;
			$fbpage->name = $page->name;
			$fbpage->category = $page->category;
			$fbpage->save();
			
			$fbuser = $fbpage->FacebookUser->contains($user);
			if (empty($fbuser)) {
				$fbpage->FacebookUser()->attach($user);
			}
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
			$call = $this->service->request($id ? $id : '/me');	// /me/data
			$response = json_decode($call, true);

			$id = $response['id'];
		}

		// Search for user in db
		//$fbUser = FacebookUser::find($id);

		// If user not found, create one
		$dcaf_message = array();
		$fbUser = FacebookUser::find($id);
		if (is_null($fbUser->FB_User_ID)) {
			$fbUser = new FacebookUser;
			$fbUser->FB_User_ID = $id;
		}
		
		$query = '?fields=id,first_name,last_name,full_name,email,link,gender,age_range_min,age_range_max,birthday,timezone,locale';
		$call = $this->service->request($id);
		$response = json_decode($call, true);
		//var_dump($response);

		$dcaf_message = array();
		foreach ($fbUser->dcaf_fields as $field) {
			try {
				//var_dump($field);
				$fbUser->{$field} = $response[$field];
			} catch (Exception $e) {
				$dcaf_message[] = 'Field ' . $field . ' threw error in getUser()';
			}
			$fbUser->save();
		}
		// maybe mail here
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
		if ($this->verbose) echo '<pre>[FacebookRetriever]->getPage(['.get_class($page).'])</pre>';
		
		// get page access-token from db
		//$page = FacebookPage::find($user);
		//$token = new StdOAuth2Token($page->access_token);
		if (!is_null($page->access_token))
			$this->setAccessToken($page->access_token);
		
		// Define query and fields. This is just pt. 1, still need media stuff, albums videos..
		$query = '?fields=posts.fields(id)';
		
		try {
			// specific field calls from Alex's email will not work with /me node, must use id?fields=...
			$response = $this->service->request($page->FB_Page_ID . $query);
			if ($this->verbose) echo "<pre>response:\n".$response.'</pre>';
		} catch (Exception $e) {
			// CHANGE: WRITE TO LOG FILE
			echo 'failed in get page';
			
			if ($this->debug)
			{
				var_dump($page->name);
				var_dump($page->access_token);
				//var_dump($e);
			}
		}
		
		$response = json_decode($response, true);
				
		/**
		*	FB does not give DCAF actual users, they only give total number of users
		*/
		/*
		if (isset($response['likes']))
		{
			//$this->processPageLikes($response['likes'], $page);
			//var_dump($response['likes']);
		}
		*/
		
		if (isset($response['posts']))
		{
			$posts = $response['posts'];
			foreach ($posts['data'] as $post) {
				$this->processPost($post, $page);
			}	
		}
		// parse through, go through pagination
		$this->postPagination($response, $page);

		/**
		 * Accepts decoded fb json, returns unpaginated array of arrays
		 * Secondary arrays are returned with name from fb, ie. post, likes
		 *
		 * $response = self::paginate($response);
		 * $responses[] = $response;
		*/
	}

	public function postPagination($posts, $page)
	{
		//paginate through posts
		if (isset($posts['paging']['next'])) {
			try {
				$call = $this->service->request($posts['paging']['next']);
				$pgresponse = json_decode($call, true);
			} catch (Exception $e) {
				$connectErr = $e;
			}
			
			if (isset($connectErr) || isset($pgresponse['error']))
			{
				// CHANGE: WRITE TO LOG FILE
				echo "failed in requesting next page";
				//var_dump($post->FBPage . $query);
				
				if ($this->debug)
				{
					echo '<pre>';
					if (isset($connectErr)) {
						echo $connectErr."\n";
					} else {
						if (isset($pgresponse['error'])) {
							echo $pgresponse['error']['type'].': '
								.$pgresponse['error']['message']."\n";
						} else {
							echo "response:\n";
							var_dump($pgresponse);
						}
					}
					echo 'page name:    '.$page->name."\n";
					echo 'function:     postPagination($posts, $page)'."\n";
					echo 'API endpoint: '.$posts['paging']['next']."\n";
					echo 'access_token: '.$page->access_token;
					echo '</pre>';
				}
				
				//die();
			}
			else if (!empty($pgresponse)) {
				// Recurse
				$this->processPost($pgresponse, $page);
				$this->postPagination($pgresponse);
			} 
		}
	}
	
	public function processPost($post, $page, $token = null)
	{
		if ($this->verbose) echo '<pre>[FacebookRetriever]->processPost({id: "'.$post['id'].'"}, ['.get_class($page).']'.($token == null ? '' : ', $token').')</pre>';
		
		$query = '?fields=likes,comments.fields(id),sharedposts,message,from';
		
		if (!is_null($token)) {
			$this->setAccessToken($token);
		}
		
		if (strstr($post['id'], '_')) {
			$parts = explode('_', $post['id']);
			if (count($parts) > 1) {
				$post['id'] = $parts[1];
			} else {
				$post['id'] = $parts[0];
			}
		}
		
		try {
			// specific field calls from Alex's email will not work with /me node, must use id?fields=...
			$response = $this->service->request($page->FB_Page_ID.'_'.$post['id'] . $query);
			if ($this->verbose) echo "<pre>response:\n".$response.'</pre>';
		} catch (Exception $e) {
			$connectErr = $e;
		}
		
		if (!isset($connectErr)) $response = json_decode($response, true);
		
		//echo '<pre>';
		//var_dump($response);
		/*foreach ($response as $key => $value) {
			var_dump($key);
		}*/
		//die();
		
		if (isset($connectErr) || isset($response['error']))
		{
			// CHANGE: WRITE TO LOG FILE
			echo "failed to retrieve post ".$post['id'];
			
			if ($this->debug)
			{
				echo '<pre>';
				if (isset($connectErr)) {
					echo $connectErr."\n";
				} else {
					if (isset($response['error'])) {
						echo $response['error']['type'].': '
							.$response['error']['message']."\n";
					} else {
						echo "response:\n";
						var_dump($response);
					}
				}
				echo 'post id:      '.$post['id']."\n";
				echo 'page name:    '.$page->name."\n";
				echo 'function:     processPost($post, $page)'."\n";
				echo 'API endpoint: '.$page->FB_Page_ID.'_'.$post['id'].$query."\n";
				echo 'access_token: '.$page->access_token;
				echo '</pre>';
			}
			
			//die();
		}
		
		$fbPost = FacebookPost::find($post['id']);
		
		if (empty($fbPost->FB_Post_ID))
			$fbPost = new FacebookPost();

		$fbPost->FB_Post_ID = $post['id'];
		// $fbPost->created_time = $response['created_time'];
		
		if (isset($response['message'])) {
			$fbPost->message = $response['message'];
		}
		
		$saveboolean = $fbPost->save();
		// $fbPost-> = ;
		
		if (isset($response['from']))
		{
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
		
		/*
		*	handle likes and comments for post
		*/
		if (isset($response['likes'])) {
			$this->processPostLikes($response['likes'], $fbPost);
		}
		
		if (isset($response['comments'])) {			
			$this->processComments($response['comments'], $fbPost);
		} 
	}


	public function processPostLikes($likes, $post) 
	{
		foreach ($likes['data'] as $like) {
			
				$fbLike = FBPostLike::where('liked_id', '=', $post->FB_Post_ID);
				
				$fbLike = $fbLike->where('liker_id', '=', $like['id'])->get();
				
				if (count($fbLike) == 0) {

					$newLike = new FBPostLike;
					//$newLike-> = ;
					$newLike->save();
					//$newLike->liked = $post->FB_Post_ID;
					$newLike->Liked()->associate($post);
					
					$this->getUser($like['id']);
					$fbUser = FacebookUser::find($like['id']);
					if (is_null($fbUser)) {
						echo 'user is null: ' . $like['id'];
						die();
					}
					$newLike->Liker()->associate($fbUser);
					$newLike->save();
				}
		}

		if (isset($likes['paging']['next'])) {
			//var_dump($page->name . 'has paging on post likes');
			//$query = '/likes?limit=100&after=' . $likes['paging']['cursors']['after'];
			$call = $this->service->request($likes['paging']['next']);
			$pgresponse = json_decode($call, true);
			
			try {
				$call = $this->service->request($likes['paging']['next']);
				$pgresponse = json_decode($call, true);
			} catch (Exception $e) {
				echo "failed in requesting next page";
				var_dump($post->FBPage . $query);
				var_dump($e);
			}
			// Recurse
			if (!isset($pgresponse['error']) && !empty($pgresponse)) {
				$this->processPostLikes($pgresponse, $post);
			}
		}
	}


	//comments has 'data' and 'paging'
	public function processComments($comments, $post)
	{
		if ($this->verbose)
		{
			echo '<pre>';
			var_dump($comments);
			var_dump($post);
			echo '</pre>';
		}
		
		$query = '?fields=likes,message,message_tags,from';
				
		foreach ($comments['data'] as $comment) {
				
				if (strstr($comment['id'], '_')) {
					$parts = explode('_', $comment['id']);
					$comment['id'] = $parts[1];
				} else {
					$comment['id'] = $response['id'];
				}

				$fbComment = FacebookComment::find($comment['id']);
				//var_dump($comment['id']);
				if (empty($fbComment->FB_Comment_ID)) {

					try {
						// specific field calls from Alex's email will not work with /me node, must use id?fields=...
						$response = $this->service->request($comment['id'] . $query);
					} catch (Exception $e) {
						$connectErr = $e;
					}

					if (!isset($connectErr)) $response = json_decode($response, true);

					if (isset($connectErr) || isset($response['error']))
					{
						// CHANGE: WRITE TO LOG FILE
						echo "failed to retrieve comment ".$comment['id'];
						
						if ($this->debug)
						{
							echo '<pre>';
							if (isset($connectErr)) {
								echo $connectErr."\n";
							} else {
								if (isset($response['error'])) {
									echo $response['error']['type'].': '
										.$response['error']['message']."\n";
								} else {
									echo "response:\n";
									var_dump($response);
								}
							}
							echo 'comment id:   '.$comment['id']."\n";
							echo 'post id:      '.$post['id']."\n";
							echo 'function:     processComments($comments, $post)'."\n";
							echo 'API endpoint: '.$comment['id'] . $query."\n";
							echo '</pre>';
						}
						
						//die();
					}
					
					if (isset($response['data'])) {
						echo 'data is set on this comment';
						var_dump($response);
						die();
					}

					/*$parts = explode('_', $comment['data']['id']);
					$comment['data']['id'] = $parts[1];

					$fbComment = new FacebookComment;
					$fbComment->message = $response['message'];
					$fbComment->FB_Comment_ID = $response['id'];
					//$fbComment-> = ;
					$fbComment->save();

					$fbComment->FBPost()->associate($post);
					
					$this->getUser($response['from']['id']);
					$fbUser = FacebookUser::find($response['from']['id']);
					if (is_null($fbUser)) {
						echo 'user is null: ' . $comment['id'];
						die();
					}
					$fbComment->FacebookUser()->associate($fbUser);
					$fbComment->save();*/
					
					die($response);
					
					$fbComment = new FacebookComment;
					$fbComment->message = $response['message'];
					$fbComment->FB_Comment_ID = $comment['id'];
					//$fbComment-> = ;
					$fbComment->save();

					$this->getUser($response['from']['id']);
					$fbUser = FacebookUser::find($response['from']['id']);
					if (is_null($fbUser)) {
						echo 'user is null: ' . $comment['id'];
						
					}
					$fbComment->FacebookUser()->associate($fbUser);
				}
				
				$fbComment->FBPost()->associate($post);
								
				$fbComment->save();
				
				if (isset($response['likes'])) {
					//$this->processCommentLikes($response['likes'], $fbComment);
					echo ' comment has likes ';
					var_dump($response['likes']);
				}
		}

		if (isset($comments['paging']['next'])) {
			echo 'in paging';
			try {
				$call = $this->service->request($comments['paging']['next']);
				$pgresponse = json_decode($call, true);
				
			} catch (Exception $e) {
				echo "failed in requesting next page";
				var_dump($post->FBPage . $query);
				var_dump($e);
			}

			if (!isset($pgresponse['error']) && !empty($pgresponse)) {
				// Recurse
				echo 'paged';
				$this->processComments($pgresponse, $post);
			}
		} 		
	}

	// Photos
	public function processPhotos()
	{
		//
	}

	/**
	*	We don't get user info for page likes, but facebook provides those insights anyway
	*/
	/*public function processPageLikes($likes, $post) 
	{
		//$query = '';
	}*/
	
	public function paginate()
	{
		// {implementation code}
	}
}

?>