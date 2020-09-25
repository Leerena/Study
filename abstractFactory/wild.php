<?php

class wild implements Factory
{
	public function makeCanidae()
	{
		return new Wolf();
	}
	public function makeFelidae()
	{
		return new Tiger();
	}
}

?>