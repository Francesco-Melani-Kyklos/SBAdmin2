<?php 
namespace aphp\SBAdmin;

class Exceptions extends \aphp\Foundation\AException 
{	
	static function exampleException($value)
	{
		return self::create($value);
	}
	static function otherCaseException($value1, $value2)
	{
		return self::create($value1, $value2);
	}
}
