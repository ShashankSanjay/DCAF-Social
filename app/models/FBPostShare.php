<?php

//
class FBPostShare extends Eloquent
{
	protected $table = 'FB_Posts_Shares';

	public function Liker()
	{
		return $this->belongsTo('FacebookUser', 'liker', 'FB_User_ID');
	}

	public function Liked()
	{
		return $this->belongsTo('FacebookPost', 'liked', 'FB_Post_ID');
	}

}

?>