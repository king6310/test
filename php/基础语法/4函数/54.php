<?php
/**
 * Created by PhpStorm.
 * User: kennyking
 * Date: 2016/8/5
 * Time: 0:05
 */

//函数参数的引用赋值

$age = 19;

function foo(&$num){ //此处，即是指，传参，不再是传实参的值，而是传实参的地址
	$num += 5;
}

foo($age);

/*
 * function foo(&$num){
 	* $num = &$num; //此时，函数内部的$num,指向外部的一个全局变量的地址。
	$num += 5;	//因此，num变，影响了外部的$age变。
	}
 */

echo $age.'<br />'; //$age受到了foo函数的影响，

/*
 * 同时，我们也可以看到：
 * 函数局部内的变量，和全局的变量
 * 并不是水火不容，谁都没机会碰到谁的
 * 是有机会相互影响的，比如上面的 引用传参。
 * 
 * 以及：超级全局变量。
 * 
 */

?>