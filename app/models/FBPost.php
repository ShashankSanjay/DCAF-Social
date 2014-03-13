<?php

/**
 * NetworkUser User Model
 * 
 * @author	Shashank Sanjay
 * @version	1.0
 */

class FBPost extends Eloquent
{
	//
	protected $table = 'FB_Posts';

	public $FB_Post_ID;
	public $Content;
	
	public function FBPage() {
		return $this->hasOne('FBPage');
	}

	public function FacebookUser() {
		return $this->hasOne('FacebookUser');
	}
}


?>
