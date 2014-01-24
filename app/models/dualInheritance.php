<?php
class dualInheritance
{
	private $objA;
	private $objB;
	
	public function __construct($classA, $classB)
	{
		$this->objA = new $classA();
		$this->objB = new $classB();
	}
	
	public function __get($name)
	{
		if (property_exists($this->objA, $name))
		{
			return $this->objA->$name;
		}
		else if (property_exists($this->objB, $name))
		{
			return $this->objB->$name;
		}
	}
	 
	public function __call($name, $arguments)
	{
		if (method_exists($this->objA, $name))
		{
			return call_user_func_array(array($this->objA, $name), $arguments);
		}
		else if (method_exists($this->objB, $name))
		{
			return call_user_func_array(array($this->objB, $name), $arguments);
		}
	}
	
	public static function __callStatic($name, $arguments)
	{
	}
	
	public function __isset($name)
	{
		return isset($this->objA->$name) || isset($this->objB->$name);
	}
}
?>