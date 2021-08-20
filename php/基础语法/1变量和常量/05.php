<?php
/**
 * Created by PhpStorm.
 * User: kennyking
 * Date: 2016/5/23
 * Time: 21:43
 */
//$_GET地址栏传值

$who = $_GET['who'];

$laoda = '刘备';
$laoer = '关羽';
$laosan = '张飞';

// $who有可能是 laoda,laoer,laosan
echo $$who;


$a = 'hello';
$hello= 'world';
$world = 'china';

echo $$$a;