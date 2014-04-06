<?php

/**
 * Social Network Interface
 * 
 * @version	1.0
 */
interface SocialNetworkInterface
{
	/**
	 * @return string
	 */
	public function getNetworkName();
	
	/**
	 * @return string
	 */
	public function getNetworkAbbr();
	
	/**
	 * @return string
	 */
	public function getNetworkURL();
	
	/**
	 * @return array
	 */
	public static function parseURL($urlParts);
}

?>