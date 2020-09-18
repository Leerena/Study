<?php

include 'autoload.php';

$tongzhizhe = new Subject();
$guanchazheA = new ObserverA('观察者A', $tongzhizhe);
$guanchazheB = new ObserverB('观察者B', $tongzhizhe);

$tongzhizhe->attach('观察者A', $guanchazheA);
$tongzhizhe->attach('观察者B', $guanchazheB);
$tongzhizhe->secretaryNews('观察者模式');
$tongzhizhe->notify();

?>