<?php

interface PayInterface
{
	/**
     * 发起扣款
     * @return mixed
     */
	public function doAction($param);
	
	public function payLog();
	
	public function sendNews();
	
}

?>