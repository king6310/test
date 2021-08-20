<?php

/*
 * strstr($str,$needle)
 * 
 * 作用:是在$str中找到指定的$needle，而且是第一次出现的位置，
 * 返回该位置直到字符串结尾的这一部分
*/

$str = 'abc.def.jpg.exe';

echo strstr($str,'.'); //.def.jpg.exe


/*
 * 能否把第一次找到的$needle的位置 之前的字符串截出来呢？
 * 
 * 答：能，从php5.3.0版本开始strstr函数多了第3个可选参数。
 */

echo strstr($str,'.',true); //abc

//strstr === strchr函数

/*
 * 经理说，
 * 能否先把$needle 最后一次出现的位置找出来，
 * 从该位置，一直截到结尾。
 * 
 * 答：strrchr
 */


echo strrchr($str,'.'); //.exe



?>