<?php
/**
 * abstract class for fetching data from a provider
 */
abstract class Retriever implements ArrayAccess
{
    protected $uid;
    protected $uname;
	protected $logged_in;
	protected $disabled;
	protected $role;
	
	function __get($n) { return $this->$n; }
	function __set($n,$v) { $this->$n = $v; }
	function offsetGet($n) { return $this->$n; }
	function offsetSet($n,$v) { $this->$n = $v; }
	function offsetExists($n) { return isset($this->$n); }
	function offsetUnset($n) { unset($this->$n); }
	
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
}
?>