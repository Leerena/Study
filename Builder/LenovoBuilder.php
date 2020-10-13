<?php
/**
 * 具体建造者
 */
class LenovoBuilder implements BuilderInterface
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
		$this->computer->screen = "lenovo screen";
	}
	/**
	 *
	 */
	public function addMouse()
	{
		$this->computer->mouse = "lenovo mouse";
	}
	/**
	 *
	 */
	public function addCpu()
	{
		$this->computer->cpu = "lenovo cpu";
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