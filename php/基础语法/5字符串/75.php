<?php

$str = 'abcdef';
//打印出字符串的第1个字母

echo substr($str,0,1);

//字符串还有类数组的特性，即可以用索引/下标，把指定的字符取出来
echo $str[0];


//如何实现字符串反转

$str = 'abc';

function rev($str){
	$len = -strlen($str);
	for($new = '',$start = -1; $start >= $len; $start--){
		$new .= substr($str,$start,1);
	}
	return $new;
}

echo rev($str);

echo strrev($str); //系统自带的字符串反转