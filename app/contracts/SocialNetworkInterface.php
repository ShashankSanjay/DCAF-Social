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
	 * @return array
	 */
	public static function parseURL($urlParts);
}

?>