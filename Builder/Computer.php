<?php

/**
 * 具体类
 * Class Computer
 */
class Computer
{
    public $mouse;
	public $screen;
	public $cpu;
	
	public function show()
	{
		echo "{$this->mouse}<br/>";
		echo "{$this->screen}<br/>";
		echo "{$this->cpu}<br/>";
	}


}


?>