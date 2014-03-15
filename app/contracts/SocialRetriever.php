<?php

/**
 * Social Retriever Interface
 * 
 * @version	1.0
 */
interface SocialRetriever
{
	/**
	 * Get user data for a given uid or the current user
	 */
	public function getUser($id = null);
	
	/**
	 * Get page data for a given id
	 */
	public function getPage($id);
	
	/**
	 * Get a post/tweet/comment for a given id
	 */
	public function getContent($id)
	
	public function paginate();
}

?>