<?php

class All extends PHPUnit_Framework_TestSuite {
	public static function suite(){
		$suite = new All();
		$suite->addTestFile('simpleTest.php');
		return $suite;
	}
}
