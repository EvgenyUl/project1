<?php 

/**
 * 
 */
namespace Dudom\Foo;

class Foo 
{
	
	function __construct()
	{
		echo $this->getClass();
	}

	public function getClass():string
	{
		return __CLASS__;
	}
}