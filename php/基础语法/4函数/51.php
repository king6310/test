<?php
/**
 * Created by PhpStorm.
 * User: kennyking
 * Date: 2016/8/5
 * Time: 0:05
 */

//函数执行权的交回

function foo(){
	echo 'a';
	echo 'b';
	echo 'c';
}

foo();

/*
 * 当函数语句运行完之后，执行权就交回
 * 或者是碰到 return 之后，函数交回执行权
 */


function bar(){
	echo 'a';
	return;
	echo 'b';
	echo 'c';
}

bar();


?>
