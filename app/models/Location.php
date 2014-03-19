<?php

class Location extends Eloquent
{
	protected $table = 'Locations';

	public function FBPage() {
		//
		return $this->hasMany('FacebookPage', 'location_of');
	}

	public function Hometown() {
		//
		return $this->hasMany('FacebookUser', 'hometown', 'id');
	}

	public function Location() {
		//
		return $this->hasMany('FacebookUser', 'location', 'id');
	}
}

?>