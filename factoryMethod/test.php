<?php

include 'autoload.php';

$param = [];
$param['name'] = 'Lee';
$param['money'] = 100;


$p = new zhifubaoFactory();
$pay = $p->creatMode();
$pay->doAction($param);

?>