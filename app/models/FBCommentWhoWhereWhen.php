<?php

/**
 * Facebook Post Model
 * 
 * @author	Shashank Sanjay
 * @author	Alexander Rosenberg
 * @version	1.0
 */
class FBCommentWhoWhereWhen extends Eloquent
{
	/**********************
	 * Instance Variables *
	 **********************/
	
	protected $table = 'FB_Comments_WhoWhereWhen';

	public $incrementing = false;

	protected $primaryKey = 'FB_Comment_ID';
		
	
	// protected $fillable	= array('*');
	protected $guarded	= array();
	
	/**********************
	 * Eloquent Relations *
	 **********************/
	
	public function FBComment()
	{
		return $this->belongsTo('FacebookComment');
	}
	
	
}

?>
