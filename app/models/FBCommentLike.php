<?php

//
class FBCommentLike extends Eloquent
{
	protected $table = 'FB_Comments_Likes';

	public function Liker()
	{
		return $this->belongsTo('FacebookUser', 'liker', 'FB_User_ID');
	}

	public function Liked()
	{
		return $this->belongsTo('FacebookComment', 'liked', 'FB_Comment_ID');
	}

}

?>