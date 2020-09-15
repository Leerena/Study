<?php
class A {
    public static function foo() {
		static::who();
	}
	public static function who() {
		echo __CLASS__."\n";
	}
}
class B extends A {
	public static function test() {
		A::foo();
		parent::foo();
		static::foo();
	}
	
	public static function who() {
		echo __CLASS__."\n";
	}
	 
	
}
class C extends B {     
    public static function who() {         
       echo __CLASS__."\n";     
    }	
} 
/**
 *1.A::foo()：非转发请求，直接调用A的foo()方法，在任何地方调用结果都是一样的
 *2.parent::foo():在B类中写着，调用B的父类A的方法foo()（parent的用法）；
 *A类中的foo()中执行 static::who()，寻找上一个非转发请求的类名（在A类的foo()方法中写上get_called_class()，
 *可得为C，由此可知就是当前执行的类），所以调用C类的who()方法（这一步就可以理解为后期静态绑定，即为static的用法）；
 *C类中重写了who()方法，所以结果为C；如果去掉C类中的who()方法，会调用B类中的who()方法；
 *如果再去掉B类中的who()方法，会调用A类中的who()方法。
 *3.self::foo():执行B类中的foo()方法（self的用法），B类中没有foo()方法，于是继承了A类的foo()方法，
 *如果B类中定义了foo()方法,则执行B类中的foo()方法;执行A类的foo()方法，如上. 
 *C::test();
 **/
?>
