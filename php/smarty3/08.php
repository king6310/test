<?php
require('smarty3/libs/Smarty.class.php');
require('class_config.php');

/*
 *     ===笔记部分===
 * 模板中的标签，是否可以进行if else判断？
 * 答：可以
 * 模板中使用逻辑的判断的思考：
 * 从分工角度看，模板不应该负责逻辑判断
 * 那么为什么还用逻辑判断呢？
 *
 * 答;有时，在模板上进行逻辑判断，可以极大的简化工作
 *
 * 比如：
 * 会员分普通会员，VIP会员，在页面右上角，显示不同的提示
 * 如果用模板做逻辑判断
 * {if $VIP} VIP XXXX {else} 普通 XXXXX {/if}
 *
 * 我们只好准备2套，一套是VIP的，一套是普通的，
 * 而这2套模板大部分相同，只有右上角有区别，也不方便
 *
 */

$smarty = new MySmarty();

$smarty -> assign('price',9999);
$smarty -> assign(array('name' => '张三','height' => '180','house' => '180','age' => '100'));

$smarty -> display('08.html');