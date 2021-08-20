<?php
/**
 * Created by PhpStorm.
 * User: kennyking
 * Date: 2016/8/5
 * Time: 0:05
 */

//动态函数
//即函数的名字 可以用变量来表示

function wel(){
	echo '欢迎1<br />';
}

function love(){
	echo '欢迎2<br />';
}

function cry(){
	echo '欢迎3<br />';
}

//执行哪一个呢？不一定
//决定，用户输入那个函数名，就执行哪个

$func = $_GET['func']; //wel/love/cry

echo $func.'<br />';

$func();	//加上小括号来调用，则会把$fun的值,当成“函数名”，来调用该函数。

//php的灵活之处，以后学面向对象时，类名字也可以是变量。
//同样的操作在java里，就要用反射。
?>