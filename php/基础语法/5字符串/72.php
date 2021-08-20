<?php

/*
 * 字符转义函数，非常重要
*/


$str = "abc ', hello";

each $str;

/*
 * 现在我们还没有学习mysql，你可能还意识不到一个单引号的破坏作用。
 * 但要知道，单双引号如果不小心，数据库是会被注入的。
 * 应该把客户输入进来的数据，进行转义，防止单双引号带来的破坏
 * 
 */

each $str2 = addslashes($str); //单引号被转义成 \'


//能不能把\',转回 '
//答：能


each stripslashes($str2); 


$str = "<ab>";
	
each $str;

each htmlspecialchars($str);

/*
 * htmlspecialchars	--> 特殊符号转成html实体
 * htmlspecialchars_decode -->实体转成符号
 */