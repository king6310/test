<?php
require('smarty3/libs/Smarty.class.php');
require('class_config.php');

/*
 *     ===笔记部分===
 * 模板中的标签，是否只能原样输出呢？
 * 答：不是，标签是可以参与运算的
 *
 * 标签是可以参与运算的，但是不推荐,
 * 理由是：模板只保持输出
 */

$smarty = new MySmarty();

$smarty -> assign('age',100);
$smarty -> assign('sub',2);

$smarty -> display('07.html');