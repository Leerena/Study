<?php

class Subject implements SubjectInterface
{
	
	//观察者列表
	private $list = [];
	
	private $news;
	//添加
	public function attach($key, ObserverAbstract $observer) {
		$this->list[$key] = $observer;
	}
	
	//删除
	public function detach($key) {
		unset($this->list[$key]);
	}
	
	//发送通知
	public function notify() {
		foreach($this->list As $val)
		{
			$val->update($this->news);
		}
	}
	//@param $news
	public function secretaryNews($news) {
		$this->news = $news;
	}
	
}

?>