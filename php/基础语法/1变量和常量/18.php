<?php
/**
 * Created by PhpStorm.
 * User: kennyking
 * Date: 2016/5/24
 * Time: 20:51
 */

//变量的值，有8种类型
//常量的值，有几种类型？

/*
$hei = 23;
define('HEI',23);

echo $hei.','.HEI.'<br />'; //整型可以赋给常量
*/


/*$hei = 23.8;
define('HEI',23.8);

echo $hei.','.HEI.'<br />'; //浮点型可以赋给常量*/

/*$hei = '六百里';
define('HEI','六百里');

echo $hei.','.HEI.'<br />'; //字符串型可以赋给常量*/

/*$hei = true;
define('HEI',true);

print_r($hei);
print_r(HEI);       //布尔型可以赋给常量*/


/*$hei = null;
define('HEI',null);

var_dump($hei,HEI);    //NULL型可以赋给常量*/

//$hei = array(1,2);
//define('HEI',array(1,2));
//
//var_dump($hei,HEI);    //数组不可以赋给常量

/*
 * 这5种变量，可以赋给一个常量
 * 整型，浮点型，字符串型，布尔型，NULL型
 * 这5种：称为标量类型。
 *
 * 其他三种：array，object，resource，都不可以赋给常量
 */