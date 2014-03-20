<?php

//
class FacebookComment extends Eloquent
{
	protected $table = 'FB_Comments';
	
	public $primaryKey	= 'FB_Comment_ID';	
	
	// protected $fillable	= array('*');
	protected $guarded	= array();
	
	public function FBPost() {
		return $this->belongsTo('FacebookPost', 'FB_Post_ID', 'FB_Post_ID');
	}

	public function FacebookUser()
	{
		return $this->hasOne('FacebookUser');
	}

	/* Fields: https://developers.facebook.com/docs/graph-api/reference/comment
	
		id,attachment.fields(description,description_tags,media.fields(image),target(id,url),title,type,url),
		title,type,url),can_comment,can_remove,comment_count,created_time,from,like_count,message,
		message_tags,parent,user_likes

	*/
}

?>