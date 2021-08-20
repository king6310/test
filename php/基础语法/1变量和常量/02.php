<?php
/**
 * Created by PhpStorm.
 * User: kennyking
 * Date: 2016/5/23
 * Time: 17:27
 */

/*
 *  ==学习笔记==
 *
 * 1.php的变量声明：
 * 用$变量名 来声明
 *
 */

$price = 40.1;

/*
 * 2.php变量的命名规范
 *
 * 变量名 是"字母，下滑线，数字的组合，并且数字不能做开头"
 */

$_ = 3;
$_price =5;
$man1 = 'zhangsan';
$man2 = 'lisi';

echo $price,$_,$man1,$man2;

/*
 *  3.PHP变量名是区分大小写的
 *  意味着，$a,$A,不是一个变量
 */

$name = 'xiaohua';
$Name = 'xiaozheng';

    echo $name,$Name;

/*
 * 4.也可以用中文来做变量，但是严重不推荐
 */

$姓名 = '曹操';

echo $姓名;