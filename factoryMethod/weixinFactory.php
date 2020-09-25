<?php

class weixinFactory implements PayFactoryInterface
{
	public function creatMode()
	{
		return new weixin();
	}
}

?>