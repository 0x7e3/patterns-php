<?php

namespace Patterns;

interface Shape
{
	public function draw();
}

class Rectangle implements Shape 
{
	public function draw() {
		echo __METHOD__."\n";
	}
}

class Square implements Shape 
{
	public function draw() {
		echo __METHOD__."\n";
	}
}

class Circle implements Shape 
{
	public function draw() {
		echo __METHOD__."\n";
	}
}

abstract class Decorator implements Shape
{

	protected $decoratedShape;

	function __construct(Shape $shape){
		$this->decoratedShape = $shape;
	}

	function draw(){
		$this->decoratedShape->draw();
	}
}

class ShapeDecorator extends Decorator
{
	private function setGreenBorder(){
		echo "BORDER COLOR GREEN"."\n";
	}

	function draw() {
		$this->decoratedShape->draw();
		$this->setGreenBorder();
	}
}

/* example */

$c = new Circle;
$rc = new ShapeDecorator(new Square);
$c -> draw();
$rc -> draw();