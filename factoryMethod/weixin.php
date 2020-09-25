<?php


class weixin implements PayInterface
{
	public function doAction($param = [])
	{
		$name = $param['name'];
        $money = $param['money'];
        echo $name . '使用微信支付,支付金额' . $money;
	}
	public function payLog()
	{
		
	}
	public function sendNews()
	{
		
	}
}

?>