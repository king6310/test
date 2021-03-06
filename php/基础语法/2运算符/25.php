<?php
/**
 * Created by PhpStorm.
 * User: kennyking
 * Date: 2016/5/25
 * Time: 23:41
 */

//运算符的运算结果
/*
 * 大家想：既然是运算，运算完之后必然有一个结果 ----结果值
 */

/*
3+2; 运算结果 5 容易理解
*/
$a = 3;
$b = 2;

$c = $a + $b;

var_dump($c);

/*

比较运算符
注意：比较运算符返回结果，只有2个可能 true/false

以 $a == $b为例，要么等，要么不等。
要么是真，要么是假

3 === 2; 运算结果是：false
*/

$c = (3 == 2);

$d = (3 > 2); // 返回的值，即true, 赋给了$d

var_dump($c);

var_dump($d);

/*
 * 字符串运算符
 * 返回结果：$a . $b,拼接后的字符串
 */



/*
 * 赋值运算符，返回值是多少呢？
 * $a=3
 */

 if($a = 99){
     echo 'aa';
 }else{
     echo 'bb';
 }

 //你知不知道，if里 判断的是那个值？
//赋值运算符的运算结果，就是 = 右边的值

echo '<br />';
$b = ($a = 99);
var_dump($b);

//再思考 下一行发生了什么？
$a = $b = $c = $d = 88;
//过程是这样的，$d = 88先进行，赋值后返回88.
//返回的88，再赋给$c
//同理...
//最终$a 也赋值为88

/*
 * 算术运算符
 * 比较运算符
 * 字符串运算符
 * 赋值运算符
 *
 * 两个难点：
 * 1.比较运算符时，有一个类型转换的问题
 * 2.凡运算，必有返回值。
 * 比较运算返回布尔值
 * 赋值运算，返回赋的值本身
 */
 
 //再来看这个操作
 $a = 10;
 $a = $a + 2;
 //经历了2个步骤
 //$a原始的值，和数字2，进行算术运算，相加。
 //既然相加，必返回计算结果，加2后的新结果，再次赋给$a

 echo $a; //12