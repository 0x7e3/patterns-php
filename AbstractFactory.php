<?php

namespace Patterns;

abstract class Product
{
	function __construct(){}

	public function classMethod(){}
}

abstract class SimpleProduct extends Product{}

abstract class FurnitureProduct extends Product{}


class Simple extends SimpleProduct
{
	function __construct()
	{
		echo "create: ".__CLASS__.PHP_EOL;
	}

	public function classMethod()
	{
		echo "class method: ".__METHOD__.PHP_EOL.PHP_EOL;
	}
}

/** */

class Table extends FurnitureProduct
{
	function __construct()
	{
		echo "create: ".__CLASS__.PHP_EOL;
	}

	public function classMethod()
	{
		echo "class method: ".__METHOD__.PHP_EOL.PHP_EOL;
	}
}

class Chair extends  FurnitureProduct
{
	function __construct()
	{
		echo "create: ".__CLASS__.PHP_EOL;
	}

	public function classMethod()
	{
		echo "class method: ".__METHOD__.PHP_EOL.PHP_EOL;
	}
}

/** */

abstract class AbstractFactory 
{
	function __construct(){}

	protected function getClassName($productName)
	{
		return "Patterns\\".$productName;
	}

	public function createProduct($productName){}
}

class SimpleFactory extends AbstractFactory
{
	
	function __construct(){}

	public function createProduct($productName){
		$productClassName = $this->getClassName($productName);
		echo "this is ".__CLASS__.PHP_EOL;
		return new $productClassName();
	}
}

class FurnitureFactory extends AbstractFactory
{
	
	function __construct(){}

	public function createProduct($productName){
		$productClassName = $this->getClassName($productName);
		echo "This is ".__CLASS__.PHP_EOL;
		return new $productClassName();
	}
}

/* example */

$furnitureFactory = new FurnitureFactory();
$table = $furnitureFactory->createProduct('Table')->classMethod();
$chair = $furnitureFactory->createProduct('Chair')->classMethod();

$simpleFactory = new SimpleFactory();
$simple = $simpleFactory->createProduct('Simple')->classMethod();