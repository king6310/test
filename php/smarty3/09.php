<?php
require('smarty3/libs/Smarty.class.php');
require('class_config.php');

/*
 *     ===笔记部分===
 * 模板中，可不可以控制循环语句？
 * 答：可以
 * for, while (smarty3新增的)
 * foreach，section
 *
 * section 功能多，配置选项多，原理和foreach一样，
 * 我们在开发中，用foreach可以满足绝大部分循环情况
 *
 * 1.for
 * 原理是，$i的初始值为$start,$i不断增加，直到等于$end
 * {for $i=$start to $end}{/for}
 *
 * 打印出1到100之间所有的奇数：
 * 常规想法：是用%2 == 1，来判断并打印，
 * 但是我们可以利用for循环的“步长”属性来控制
 * 步长即由小到大过程中，每一步的增长“幅度”，
 * 1，3，5，7，9每一步递增2
 *
 * 循环变量@total  获取本次循环的总次数
 * 循环变量@iteration 循环的次数，第几次循环
 * 循环变量@first  第一次循环数
 * 循环变量@last   最后一次循环数
 */

$smarty = new MySmarty();

//来个for循环输出1到10
$smarty -> assign('start',1);
$smarty -> assign('end',9);

$smarty -> display('09.html');