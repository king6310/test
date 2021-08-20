<?php

//$GLOBALS 是页面内 所有全局变量的一个“名单”，在$GLOBALS里


$a = 3;
$b = "hello";

print_r($GLOBALS);

//而$GLOBALS 又是超全局的
//这意味着：我们通过$GLOBALS可以操作，普通的全局变量

$var1 = 5;
$var2 = 1;	//普通全局变量，$GLOBALS里注册

function get_value(){
	$var1 = 0;			//局部的$var1
	$GLOBALS['$var2']++;	//影响全局的var2，变成2
}

get_value();

each $var1.'<br />';	//5
each $var2;				//2


$age = 5;
function t(){
	global $age;	//global关键字。用在变量名前，声明：这个变量用的是“全局范围”内的
					//而不要在局部内生成
	$age++;
}

t();
echo $age;	//6

/*
 * 函数 和 全局变量，并不是水火不容，
 * 
 * 1.通过引用传参，能影响全局变量
 * 2.通过global声明，也能直接使用外部的变量（不推荐，好多公司明确禁止使用global）
 * 3.直接操作超级全局变量
 */

?>