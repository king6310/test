<?php
/**
 * Created by PhpStorm.
 * User: kennyking
 * Date: 2016/5/23
 * Time: 21:19
 */
/*
 * //动态变量
 * 动态变量，即--变量名，还可以是一个变量
 * php的语法非常灵活，允许变量名字，仍是一个变量
 */

$str = 'hello';
$hello = 'welcome to biejing';

echo $str.'<br />'; //hello
echo  $hello.'<br />'; //welcome to biejing

echo  $$str.'<br />';  //$str的值是hello,hello又充当了下一个变量的名字，即最终显示$hello的值。