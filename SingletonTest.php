<?php
class SingletonTest
{

    /**
    * 必须先声明一个静态私有属性:用来保存当前类的实例
    * 1. 为什么必须是静态的?因为静态成员属于类,并被类所有实例所共享
    * 2. 为什么必须是私有的?不允许外部直接访问,仅允许通过类方法控制方法
    * 3. 为什么要有初始值null,因为类内部访问接口需要检测实例的状态,判断是否需要实例化
    */

    private static $instance;
	//克隆方法私有化:禁止从外部克隆对象
    private function __clone(){}
	//构造器私有化:禁止从类外部实例化
    private function __construct(){}
	//防止被反序列化
	private function __wakeup(){}
	//因为用静态属性返回类实例,而只能在静态方法使用静态属性
    //所以必须创建一个静态方法来生成当前类的唯一实例
    public static function getInstance()
    {
        //检测当前类属性$instance是否已经保存了当前类的实例
        if (self::$instance == null) {
           //如果没有,则创建当前类的实例
           self::$instance = new self();
        }
        //如果已经有了当前类实例,就直接返回,不要重复创建类实例
        return self::$instance;
    }
	

}

$first = SingletonTest::getInstance();
$second = SingletonTest::getInstance();
var_dump($first == $second);



?>