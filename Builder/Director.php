<?php

/**
 * 指挥者
 * Class Director
 */
class Director
{
    /**
     * @param $_builder      建造者
     * @return mixed         产品类
     */
    function Construct($_builder)
    {
        $_builder->createComputer();
		$_builder->addScreen();
        $_builder->addMouse();
        $_builder->addCpu();
        return $_builder->getComputer();
    }
}


?>