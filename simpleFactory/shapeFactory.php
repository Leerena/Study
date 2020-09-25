<?php

class shapeFactory
{
	const CIRCLE = 'circle';
	const SQUARE = 'square';
	private $shape;
	public function __construct($shape)
	{
		$this->shape = $shape;
	}
	public function getShape()
	{
		switch ($this->shape){
			case self::CIRCLE:
			    return new Circle();
				break;
		    case self::SQUARE:
			    return new Square();
				break;
			default:
			    return null;
		}
	}
}

?>