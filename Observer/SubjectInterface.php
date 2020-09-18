<?php

interface SubjectInterface
{
	//添加
	public function attach($key, ObserverAbstract $observer);
	//删除
	public function detach($key);
	//发送通知
	public function notify();
	//@param $news
	public function secretaryNews($news);
}

?>