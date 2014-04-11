<?php

use OAuth\OAuth2\Token\StdOAuth2Token;

/**
 * Facebook Model
 * 
 * @author	Alexander Rosenberg
 * @author	Shashank Sanjay
 * @version	1.0
 */
class Facebook extends SocialNetwork implements SocialNetworkInterface
{
	const NETWORK_NAME = "Facebook";
	const ABBREVIATION = 'FB';
	const RETRIEVER = 'FacebookRetriever';
	const PAGE_TYPE = 'FacebookPage';
	const POST_TYPE = 'FacebookPost';
	const COMMENT_TYPE = 'FacebookComment';
	const USER_CLASS = "FacebookUser";
	const GET_USER_URI = '/me';
	// const ACCOUNT_ENDPOINT = '/me';
	const SERVICE_CLASS = '\OAuth\OAuth2\Service\Facebook';
	const NETWORK_URL = 'http://www.facebook.com/';
	const API_ENDPOINT_BASE = 'https://graph.facebook.com/';
	
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
	
	/********************
	 * Class Operations *
	 ********************/
	
	public static function parseURL($urlParts)
	{
		//echo 'in fb::parseURL';
		$props = array();
		
		$host		= $urlParts['host'];
		$path		= $urlParts['path'];
		// $pathParts	= $urlParts['pathParts'];
		$pathPart	= $urlParts['pathPart'];
		$gparentDir	= $urlParts['gparentDir']; // ex. hofstra4congo
		$parentDir	= $urlParts['parentDir']; // ex. posts
		$filePart	= $urlParts['filePart']; // ex. 567994109915373
		
		if ($pathPart == '.' && ctype_digit($filePart))
		{
			$props['post_id'] = $filePart;
		}
		else if ($gparentDir == 'pages' && ctype_digit($filePart))
		{
			$props['page_name'] = $parentDir;
			$props['post_id'] = $filePart;
		}
		else if (isset($urlParts['query']))
		{
			parse_str($urlParts['query'], $queryFields);
			
			if ($path == 'permalink.php')
			{
				if (isset($queryFields['id']) && ctype_digit($queryFields['id']))
				{
					$props['page_id'] = $queryFields['id'];
				}
				
				if (isset($queryFields['story_fbid']) && ctype_digit($queryFields['story_fbid']))
				{
					$props['post_id'] = $queryFields['story_fbid'];
				}
			}
			else if ($path == 'photo.php')
			{
				// facebook wall (timeline) id
				if (isset($queryFields['fbid']) && ctype_digit($queryFields['fbid']))
				{
					$props['photo_id'] = $queryFields['fbid'];
				}
				
				if (isset($queryFields['set']))
				{
					$ids = explode('.', $queryFields['set']);
					
					if ($ids[0] == 'a')
					{
						$props['wall_id'] = $ids[1];
						$props['album_id'] = $ids[2];
						$props['page_id'] = $ids[3];
					}
					else if ($ids[0] == 'p')
					{
						$props['photo_id'] = $ids[1];
					}
				}

				$props['entity'] = 'FacebookPhoto';
				$props['entityLookUp'] = 'lookUpPhoto';

			}
			else if ($path == 'album.php')
			{
				// facebook wall (timeline) id
				if (isset($queryFields['fbid']) && ctype_digit($queryFields['fbid']))
				{
					$props['wall_id'] = $queryFields['fbid'];
				}
				
				// page id
				if (isset($queryFields['id']) && ctype_digit($queryFields['id']))
				{
					$props['page_id'] = $queryFields['id'];
				}
				
				// album id
				if (isset($queryFields['aid']) && ctype_digit($queryFields['aid']))
				{
					$props['album_id'] = $queryFields['aid'];
				}
			}
			elseif ($parentDir == 'posts') {				
				// Find page, this should be made more efficient by going to through pages linked to user, then checking those url's
				$fbPage = FacebookPage::where('link', '=', $urlParts['scheme'] . '://' . $host . '/' . $gparentDir)->first();
				
				if (empty($fbPage)) {
					Session::flash('danger', 'Whoops, there seems to be an error with that url. Either we do not support it, or you may not have admin rights to this page');
					return View::make('site.onePage');
				}

				$props['page_id'] = $fbPage->FB_Page_ID;
				
				//set post id
				$props['post_id'] = $filePart;

				$props['entity'] = 'FacebookPost';
				$props['entityLookUp'] = 'lookUpPost';
			}
		}
		
		return $props;	
	}
	
	public static function lookUpPhoto($props)
	{
		$fbPage = FacebookPage::find($props['page_id']);

		$consumer = OAuth::consumer('facebook');
		$consumer->getStorage()->storeAccessToken("Facebook", new StdOAuth2Token($fbPage->access_token));

		$facebookRetriever = new FacebookRetriever();
		
		//$facebookRetriever->processPost($props['photo_id'], $props['page_id']);

		$call = $consumer->request($props['photo_id']);
		$response = json_decode($call);

		echo '<pre>';
		var_dump($response);
		foreach ($response as $key => $value) {
			var_dump($key);
		}
		die();
	}

	public static function lookUpPost($props)
	{
		$fbPage = FacebookPage::find($props['page_id']);
		$consumer = OAuth::consumer('facebook');
		$consumer->getStorage()->storeAccessToken("Facebook", new StdOAuth2Token($fbPage->access_token));

		//$post['id'] = $post_id;
		$post['id'] = $props['post_id'];
		$facebookRetriever = new FacebookRetriever();

		$facebookRetriever->processPost($post, $fbPage, $fbPage->access_token);

		return $post['id'];
	}

	/**********************
	 * Eloquent Relations *
	 **********************/
	
	public function networkUsers()
    {
        return $this->hasMany('NetworkUser', 'DCAF_User_ID');
    }
    
	public function facebook()
    {
        return $this->hasOne('Thomaswelton\LaravelOauth\Eloquent\Facebook');
    }
    
	/******************/
	/* getter methods */
	/******************/
	
	/******************/
	/* setter methods */
	/******************/
}

?>