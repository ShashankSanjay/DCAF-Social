<?php

/**
 * Social Network Model
 */
class SocialNetwork
{
	//$reflectionObj = new ReflectionClass("Foo");
	
	public function getNetworkName()
	{
		return static::NETWORK_NAME;
	}
	
	public function getNetworkAbbr()
	{
		return static::ABBREVIATION;
	}
	
	public function getNetworkURL()
	{
		return static::NETWORK_URL;
	}
}

?>