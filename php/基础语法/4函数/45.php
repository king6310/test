<?php
/**
 * Created by PhpStorm.
 * User: kennyking
 * Date: 2016/8/5
 * Time: 0:05
 */

/*
 * 函数的命名规范
 *
 * 和变量一样，但是不区分大小写
 * 以后学到的面向对象时，方法(理解成函数)，也是不区分大小写的
 *
 * 声明函数时的参数 ---> 叫形式上的参数，形参
 * 调用函数时的参数 ---> 叫实际上的参数，实参
 *
 * 形参在函数体内提供？---> 变量名
 * 实参在函数体内提供？---> 值
 *
 */
function foo($num){
    $num +=1;
    $num *=2;
    $num /=3;
    $num +=999;
    return $num;
}

$price = 100;

echo foo($price).'<br />';
echo $price;

//因为，在函数运行，$price的(值)传递给 $num
//因此，函数体内的$num,无论怎么变，和$price无关了。

