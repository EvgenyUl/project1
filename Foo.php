<?php 

/**
 * 
 */
namespace Dudom;

class Foo 
{
	
	function __construct()
	{
		$this->getClass();
	}

	public function getClass():string
	{
		return __CLASS__;
	}
}