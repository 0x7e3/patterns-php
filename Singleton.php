<?php

namespace Patterns;

class Singleton 
{
	static private $_instance = NULL;

	private function __construct(){}

	private function __clone(){}

	static public function getInstance()
	{
		if (!self::$_instance){
			self::$_instance = new Singleton();
			echo "test: create once".PHP_EOL;
		}
		echo "test: get again".PHP_EOL;
		return self::$_instance;
	}
}

/* example */

$object = Singleton::getInstance();
$object = Singleton::getInstance();
$object = Singleton::getInstance();