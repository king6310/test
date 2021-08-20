<?php
	
//把1234567，转成1,234,567的形式

$num = '1234567';

function t1($num){
	$arr = str_split(strrev($num),3);
	return strrev(implode(',',$arr));
}

print_r(t1($num));

function t1($num){
	$num = strrev($num);
	$num = strrev(chunk_split($num,3,','));
	
	return ltrim($num,',');
}

print_r(t2($num));

//系统函数
echo number_format($num);