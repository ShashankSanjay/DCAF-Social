<?php

//
class FBPostLike extends Eloquent
{
	protected $table = 'FB_Posts_Likes';

	public function Liker()
	{
		return $this->belongsTo('FacebookUser', 'liker_id', 'FB_User_ID');
	}

	public function Liked()
	{
		return $this->belongsTo('FacebookPost', 'liked_id', 'FB_Post_ID');
	}

}

?>