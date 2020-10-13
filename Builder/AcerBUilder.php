<?php

/**
 * 具体建造者
 */
class AcerBuilder implements BuilderInterface
{
	protected $computer;
	/**
	 *return mixed
	 */
	public function createComputer() 
	{
		$this->computer = new Computer();
	}
	/**
	 *
	 */
	public function addScreen()
	{
		$this->computer->screen = "acer screen";
	}
	/**
	 *
	 */
	public function addMouse()
	{
		$this->computer->mouse = "acer mouse";
	}
	/**
	 *
	 */
	public function addCpu()
	{
		$this->computer->cpu = "acer cpu";
	}
	/**
	 *return mixed
	 */
	public function getComputer()
	{
		return $this->computer;
	}
		
	
}


?>