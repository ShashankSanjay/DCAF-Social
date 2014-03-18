<?php

class Location extends Eloquent
{
	protected $table = 'Locations';

	public function FBPage() {
		//
		return $this->hasMany('FB_Pages', 'location_of');
	}

	public function FBUser() {
		//
		return $this->hasMany('FB_Users', 'location_of');
	}
}

?>