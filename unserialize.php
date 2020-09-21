<?php
class myClass{
    public $myContent;
    function __construct($string){
        $this->myContent = $string;
    }
	//_sleep() 就表示当你执行serialize()这个序列化函数之前时的事情，就像一个回调函数，
	//所以在这个回调函数里面我们就可以做点事情
    public function __sleep(){
        $this->myContent = '这是我的秘密';
        return array('myContent');

    }
	/**
	__wakeup()和__sleep()大同小异，只不过是反序列化之前进行的回调函数。
	 public function __wakeup(){
        $this->myContent = '我的秘密又回来了';
    }
	*/
    private function __wakeup(){
        $this->myContent = '我的秘密又回来了';
        //反序列化就不用返回数组了，就是对应的字符串的解密，字符串已经有了就不用其他的了
    }
}
$content = new myClass('这是一个秘密');
print_r(serialize($content));
print_r(unserialize(serialize($content)));
?>