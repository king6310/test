<?php
//用5种以上方式获取文件的后缀名
//例:a.jpeg.exe,获得 exe，或者.exe

//方法1

$file = 'a.jpeg.exe';

function getext($file){
	return sttrchr($file,'.');
}

echo getext($file);


//方法2

//找最后一个，出现的位置，在substr截取
// strrpos 是找子字符第一次出现的位置？

function getext2($file){
	return substr($file,strrpos($file,'.'));
}
echo getext2($file);


//方法3

//把字符串反过来，然后再找第一个点出现的位置。

function getext3($file){
	$file = strrev($file);
	return strrev(substr($file,0,strpos($file,'.')));
}
echo getext3($file);

//方法4
//用系统函数 pathinfo

function getext4($file){
	$arr = pathinfo($file);
	return $arr['extension'];
}

echo getext4($file);