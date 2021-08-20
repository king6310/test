<?php

/*
 * 字符串  分割，反转，拼接
 * 
 * str_split 将字符串转换为数组
*/

$str = 'abcdef';
$arr = str_split($str);

//发现，把字符串的字符，拆成了数组，每个单元一个字符。
print_r($arr);

//经理问：能不能2个字符一个单元，拆成数组。

$arr = str_split($str,2);
print_r($arr);
?>