<?php

//
class FBPageLike extends Eloquent
{
	protected $table = 'FB_Pages_Likes';

	public function Liker()
	{
		return $this->belongsTo('FacebookUser', 'liker', 'FB_User_ID');
	}

	public function Liked()
	{
		return $this->belongsTo('FacebookPage', 'liked', 'FB_Page_ID');
	}

}

?>