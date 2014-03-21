<?php

/**
 * Facebook Post Model
 * 
 * @author	Shashank Sanjay
 * @author	Alexander Rosenberg
 * @version	1.0
 */
class FBPostWhatWhy extends Eloquent
{
	/**********************
	 * Instance Variables *
	 **********************/
	
	protected $table = 'FB_Posts_WhatWhy';

	public $incrementing = false;

	protected $primaryKey	= 'FB_Post_ID';
		
	
	// protected $fillable	= array('*');
	protected $guarded	= array();
	
	/**********************
	 * Eloquent Relations *
	 **********************/
	
	public function FBPost()
	{
		return $this->belongsTo('FacebookPost');
	}

}

?>
