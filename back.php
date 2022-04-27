<?php   

$app = new ClassName;

/**
 * 
 */
class ClassName extends AnotherClass
{
	
	protected $array = [];

	function __construct()
	{
		echo __METHOD__;

	}

	public function get($key)
	{
		return $this->array[$key];
	}

	public function set($key, $value)
	{
		return $array[$key] = $value;
	}
}