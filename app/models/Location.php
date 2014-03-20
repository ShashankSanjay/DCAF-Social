<?php

class Location extends Eloquent
{
	protected $table = 'Locations';

	public $incrementing = false;

	protected $primaryKey	= 'FB_Location_ID';

	public function FBPage() {
		//
		return $this->hasMany('FacebookPage', 'location_of');
	}

	public function Hometown() {
		//
		return $this->hasMany('FacebookUser');
	}

	public function FacebookUser() {
		//
		return $this->hasMany('FacebookUser');
	}
}

?>