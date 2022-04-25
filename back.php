<?php   

echo "I am the back branch";

echo "string";

$app = new ClassName;

/**
 * 
 */
class ClassName extends AnotherClass
{
	
	function __construct()
	{
		echo __CLASS__;

	}
}