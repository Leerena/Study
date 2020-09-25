<?php

class Poultry implements Factory
{
	public function makeCanidae()
	{
		return new Dog();
	}
	public function makeFelidae()
	{
		return new Cat();
	}
}

?>