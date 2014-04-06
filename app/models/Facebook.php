<?php

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
		$props = array();
		
		$host		= $urlParts['host'];
		$path		= $urlParts['path'];
		// $pathParts	= $urlParts['pathParts'];
		$pathPart	= $urlParts['pathPart'];
		$gparentDir	= $urlParts['gparentDir'];
		$parentDir	= $urlParts['parentDir'];
		$filePart	= $urlParts['filePart'];
		
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
		}
		
		return $props;	
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