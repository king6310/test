<?php

$arr = array(3=>'梅',2=>'兰',5=>'竹',9=>'菊');
//这一次，for循环没有规律可循，再用for循环就不灵了。。。。。
//引入foreach

foreach($arr as $k=>$v){//这是说:循环数组的每个单元，把单元的键献给$k,值赋给$v
	echo $k,'~',$v,'<br />'; //停留在最后一次赋值的情况
}

//有人说，我不想循环时，要数组的键，我只想循环打印每个单元值

foreach($arr as $v){ //这是说:循环数组的每个单元，把单元的值赋给$v
	echo $v,'<br />';
}

//有人说，我不想循环时，要数组的值，我只想循环打印数组键

foreach($arr as $k){ //打印的还是值，$k只是被赋值而已
	echo $v,'<br />'; 
}