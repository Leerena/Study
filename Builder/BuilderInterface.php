<?php
/**
 *user:Leerena
 *Date:2020/10/13
 */
 //建造者接口
interface BuilderInterface
{
	/**
	 *return mixed
	 */
	public function createComputer();
	/**
	 *return mixed
	 */
	public function addScreen();
	/**
	 *return mixed
	 */
	public function addMouse();
	/**
	 *return mixed
	 */
	public function addCpu();
	/**
	 *return mixed
	 */
	public function getComputer();
	/**
	 *......
	 */
}


?>