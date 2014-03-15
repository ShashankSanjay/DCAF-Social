<?php

/**
 * Facebook Post Model
 * 
 * @author	Shashank Sanjay
 * @author	Alexander Rosenberg
 * @version	1.0
 */
class FBPost extends Eloquent
{
	/**********************
	 * Instance Variables *
	 **********************/
	
	protected $table = 'FB_Posts';
	
	public $FB_Post_ID;
	public $Content;
	
	/**********************
	 * Eloquent Relations *
	 **********************/
	
	public function FBPage()
	{
		return $this->hasOne('FBPage');
	}

	/*public function FacebookUser()
	{
		return $this->hasOne('FacebookUser');
	}
	*/
	/*
		All fields for post. From:https://developers.facebook.com/docs/reference/api/post/
		
		actions,application,caption,comments,created_time,description,from,icon,id,is_hidden,link,message,message_tags,name,object_id,picture,place,privacy,properties,shares,source,status_type,story,story_tags,to,type,updated_time,with_tags
		
		Only perms are access_token and read_stream
	*/
}

?>
