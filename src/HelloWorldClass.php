<?php
namespace aphp\SBAdmin;
Functions::autoload();

class HelloWorldClass {
	
	// constans
	const VERSION = '1.0';
	
	// properties
	public $var;
	public $otherVar;

	public function method1() {
		return true;
	}
	
	public function method2() {
		throw Exceptions::exampleException('hello world value');
		return false;
	}
	
	public function method3() {
		throw Exceptions::otherCaseException('hello', 'world');
		return false;
	}
	
	public function method4() {
		// functions usage
		foo();
		bar();
	}
}
	
	