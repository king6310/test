<?php
/**
    ===笔记部分===
 * 接下来学习 smarty标签变量的来源
 * 在模板中
 * {$title},则说明$title标签在被assign赋过值，因此显示
 * 思考：smarty的标题变量对应的来源，除了assign，还有哪些？
 *
 * 答：
 * smarty标签变量，来源于3个部分
 * 1.是php中assign分配的变量
 * 2.samrty的系统保留变量
 * 3.从配置文件读取到的配置变量
 */

require('smarty3/libs/Smarty.class.php');
$smarty = new Smarty();
$smarty -> template_dir = 'temp';
$smarty -> compile_dir = 'comp';
$smarty -> config_dir = 'conf';

$user = array('name'=>'刘备','age'=>'28');
$smarty -> assign($user);

//连续一个标签赋多个值时，可以用append进行追加
//把append到一个标签里变量，都放到一个数组里
$smarty -> append('ust','张三');  //这一步,_tpl_var['stu'][]='张三'；
$smarty -> append('ust','李四');  //这一步,_tpl_var['str'][]='李四'；

$smarty -> assign('arr',array('tar'=>array('row'=>array('he'=>'黑河'))));
$smarty -> display('04.html');