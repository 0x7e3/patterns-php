<?php

namespace Patterns;

abstract class Product
{
	function __construct(){}
	public function productMethod(){}
}

class Table extends Product
{
	function __construct()
	{
		echo __METHOD__.PHP_EOL;
	}
}

class Chair extends Product
{
	function __construct()
	{
		echo __METHOD__.PHP_EOL;
	}
}

class Factory 
{
	function __construct(){}

	private function getClassName($productName)
	{
		return "Patterns\\".$productName;
	}

	public function createProduct($productName)
	{
		$productClassName = $this->getClassName($productName);
		return new $productClassName();
	}
}

/* example */

$factory = new Factory();
$table = $factory->createProduct('Table');
$chair = $factory->createProduct('Chair');