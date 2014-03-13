<?php

/**
 * NetworkUser User Model
 * 
 * @author	Shashank Sanjay
 * @version	1.0
 */

class FBPage extends Eloquent
{
	//
	protected $table = 'FB_Page';

	public $FB_Page_ID;
	public $access_token;
	public $name

	public function FacebookUser() {
		//
		return this->hasMany('FacebookUsers');
	}

	public function DcafUser() {
		//
	}
}


?>