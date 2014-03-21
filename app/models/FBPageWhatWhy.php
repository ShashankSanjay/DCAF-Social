<?php

/**
 * Facebook Post Model
 * 
 * @author	Shashank Sanjay
 * @author	Alexander Rosenberg
 * @version	1.0
 */
class FBPageWhatWhy extends Eloquent
{
	/**********************
	 * Instance Variables *
	 **********************/
	
	protected $table = 'FB_Pages_WhatWhy';

	public $incrementing = false;

	protected $primaryKey	= 'FB_Page_ID';
		
	
	// protected $fillable	= array('*');
	protected $guarded	= array();
	
	/**********************
	 * Eloquent Relations *
	 **********************/
	
	public function FBPage()
	{
		return $this->belongsTo('FacebookPage');
	}

}

?>
