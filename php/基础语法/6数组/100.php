<?php

//刚才 我们用 array_key_exists 来判断数组的某个'键'存不存在
//能否，有一个函数，判断某个值存不存在呢？
// 答：有 in_array

/*
 * 题目：老师把全班同学的名字，都放在一个数组里
 * 姓名非常多，让你找有没有叫'小刚'的同学。
 * 
 * 你要怎么办？
 * 
 * 思路：用foreach循环数组，把每个数组单元的值与'小刚'比较
 */

$arr = array('小明','小华','老李','小刚','老张');

function inarray($seach,$arr){
	$find = false;
	foreach($arr as $v){
		if($v = $seach){
			$find = true;
			break;
		}
	}
	return $find;
}

if(inarray('小刚',$arr)){
	echo '有小刚';
}else{
	echo '没有小刚';
}

if(in_array('小刚',$arr)){
	echo '有小刚';
}else{
	echo '没有小刚';
}

/*
 * 多学一行知识，就能少写一行代码
 * 
 * 没必要自己写这个函数，系统直接有此函数。
 * 
 */