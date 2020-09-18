<?php

include 'autoload.php';

$tongzhizhe = new Subject();
$guanchazheA = new ObserverA('观察者A', $tongzhizhe);
$guanchazheB = new ObserverB('观察者B', $tongzhizhe);

$tongzhizhe->attach('观察者A', $guanchazheA);
$tongzhizhe->attach('观察者B', $guanchazheB);
$tongzhizhe->secretaryNews('观察者模式');
$tongzhizhe->notify();

//使用场景：用户登录，需要写日志，送积分，参与活动 等使用消息队列，把用户和日志，积分，活动之间解耦合

?>
