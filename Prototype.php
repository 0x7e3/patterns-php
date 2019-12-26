<?php

namespace Patterns;

abstract class Field{}

class Earth extends Field{}

class Sea extends Field{}

class Forest extends Field{}


class Prototype
{
	private $earth, $sea, $forest;

	private $factoryList = [];

	function __construct(Earth $e, Sea $s, Forest $f)
	{
		$this->earth = $e;
		$this->sea = $s;
		$this->forest = $f;

		$this->factoryList = [
			'earth' => $this->earth, 
			'sea' => $this->sea,
			'forest' => $this->forest
		];
	}

	public function getField($fieldName){
		return clone $this->factoryList[$fieldName];
	}
}

$landlord = new Prototype(new Earth(), new Sea(), new Forest());

/* example */

var_dump($landlord->getField('earth'));
var_dump($landlord->getField('earth'));
var_dump($landlord->getField('earth'));
var_dump($landlord->getField('sea'));
var_dump($landlord->getField('sea'));
var_dump($landlord->getField('forest'));