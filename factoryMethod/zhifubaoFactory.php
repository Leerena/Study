<?php

class zhifubaoFactory implements PayFactoryInterface
{
	
	public function creatMode()
	{
		return new zhifubao();
	}
	
}


?>