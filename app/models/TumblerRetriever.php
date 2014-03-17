<?php

/**
 * Tumbler Retriever
 * 
 * @version	1.0
 */
class TumblerRetriever implements SocialRetriever
{
	public $consumer;
	
	/**
	 * Constuctor
	 */
	public function __construct($consumer = null)
	{
		// parent::__construct($consumer);
		// if ($consumer == null) $consumer = OAuth::consumer('tumbler');
		$this->consumer = $consumer;
	}
	
	/**
	 * Tumbler Stuff
	 */
	public function getUser($id = null)
	{
		// Get user info
		$response = $this->consumer->request('');
		$data = json_decode($response, true);
	}
	
	public function getPage($id)
	{
		// Get user pages
	}
	
	public function getContent($id)
	{
		// {implementation code}
	}
	
	public function paginate()
	{
		// {implementation code}
	}
}

?>