<?php
/**
 * abstract base class for fetching data from a provider
 */
abstract class Retriever implements ArrayAccess
{
	protected $consumers;
	protected $logged_in;
	protected $disabled;
	protected $role;
	
	/* Methods for implementing ArrayAccess */
	
	function __get($n) { return $this->$n; }
	function __set($n,$v) { $this->$n = $v; }
	function offsetGet($n) { return $this->$n; }
	function offsetSet($n,$v) { $this->$n = $v; }
	function offsetExists($n) { return isset($this->$n); }
	function offsetUnset($n) { unset($this->$n); }
	
	/***** Instance Methods *****/
	
	/*** Setters ***/
	
	public function setRole($role = 'user')
	{
		$this->role = $role;
	}
	
	public function login();
	
	
	/*** Getters ***/
	
	public function getID()
	{
		return $this->uid;
	}
	
	public function getUsename()
	{
		return $this->uname;
	}
	
	public function getRole()
	{
		return $this->role;
	}
	
	protected function callApi($provider, $path)
	{
		// make the api call to retrieve user admin pages
		return json_decode($consumers[$provider]->request($path), true);
	}
}
?>