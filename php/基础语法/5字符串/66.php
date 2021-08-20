<?php

/*
 * 字符串函数讲解
 * php中，字符串函数非常非常多。
 * 在此，归为9类
 * 每类，有代表的讲解1-2个。
 * 
*/

/*
 * 3.字符串替换
 * str_replace()
 * str:string 字符串
 * replace：替换
 * strtr()
 */

//准备，把hi换成hello
$str = 'hi,this is lily,history';

echo str_replace('hi','hello',$str);

//能不能帮我统计下，替换了几次呢？

str_replace('hi','hello',$str,$num);
echo $num;

//再次要求，把hi换成hello，再把li换成ul
//可以用数组参数，指定多种替换。
$search = array('hi','li');
$replace = array('hello','ul');

echo str_replace($search,$replace,$str);
/*
 * hi单词 ===> hello单词
 * 但
 * this单词中间的一部分的hi，也被换了，导致this单词都错了
 * 
 * 能不能，专替换hi单词呢？
 * 如果hi是单词的一部分，则不替换？
 * 
 * 正则表达式
 */

/*
 * 突发奇想
 * hi -> hello,hello -> hi
 */

$str = "hi lily,hello jim";

echo str_replace(array('hi','hello'),array('hello','hi'),$str);
//觉得应该变成 hello lily,hi jim，实际打印是  hi lily,hi jim

/*
 *分析：
 * hi -> hello
 * hello lily,hello jim
 * 
 * hello -> hi
 * hi lily,hi jim
 * 

 */

/*
 * strtr() 以单个字符对应来替换的
 * 
 * 比如 strtr($str,'hi','ab'),则执行 h --> a, i-->b
 * 
 * 如果看着不舒服，可以换个写法
 * 
 */

$str = "hi lily,hello jim";
echo strtr($str,'hi','hello'); //he lely,hello jem

//用户在网站是有可能输入全角字符。由我们的程序统一把全角转半角
$str = '你好。，１２３４５６，'; 

echo strtr($str,array('１' => '1','２' => '2'));

/*
 * 全半角转换，用strtr非常方便
 * 在网站开发中，这个功能也常见
 * 
 * 比如,ecshop里就有。
 */

?>