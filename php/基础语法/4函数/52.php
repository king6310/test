<?php
/**
 * Created by PhpStorm.
 * User: kennyking
 * Date: 2016/8/5
 * Time: 0:05
 */

/*
 * 函数 既然比喻成 加工机
 * 入口 -> 原料 ->传参数
 * 函数体 -> 加工
 * 出口 —> 加工结果
 * 
 */

//求和函数
function sum($num1,$num2){
	return $num1+$num2;
}

//函数调用，发回一个结果的。
//结果，就是return 的值
$s = sum(3,2) //5

echo $s;

//但是 我们知道,函数是可以没有‘return 语句的’，没有return语句，返回

function t(){
	$num = 999;
}

$s = t();

var_dump($s); //NULL

//或者有的时候，函数确实要结束，但又必要返回值，因此，只写一个return
function t2(){
	$num = 666;
	return;		 //NULL
	echo 'aaa';
}

$s = t2();

var_dump($s);

/*
 * 调用函数的返回值，
 * 即是return 的值。
 *
 * 如果没有return语句，或者"return;"
 * 则返回值是 NULL
 */

/*
 * 思考：函数可不可以return回来2个值？
 * 
 * 答：不可能，函数的定义就决定了不能。
 * 从数学上来，一组确定的参数，只能得到一个确定的函数结果。
 * 从程序来说，return 值1；之后，函数结束，也不可能再return第2个值。
 * 
 * 有同学说：用数组
 * return array(1,2); //数组是一个值，只不过是一个复合值。
 * 
 * 有同学说：return $a,$b;
 */

/*
function t3(){
	return 1,2;	//语法错误
}
*/


?>