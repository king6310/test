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

//3种变量来源 之assign赋值
$smarty -> assign('name','罗隐');
$smarty -> assign('poen','我未成名君未嫁，可能俱是不如人。');


//3种变量来源 之系统保留变量
/*
 * $smarty.开头标签，当系统变量来解析
   如$smarty.get.id,解析成<?php echo $_GET['id'];?>
   还有$smarty.post,$smarty.session,$smarty.cookies

   注意：要是想显示一个常量，又该如何？$smarty.const.常量名
*/
$smarty -> assign('id',$_GET['id']);
define('HEI','8846');
//3种变量来源 之配置文件中的配置变量
/*
 * 有些数据，比如网站底部的电话信息，不想从数据库读了，
 * 可以写到配置文件里，模板能读出此配置文件的配置选项来
 * 1.配置文件一般以.conf做后缀
 * 2.配置文件的写法是
 * 选项1=值1
 * 选项2=值2
 * 3.配置smarty的config_dir,并把配置文件放在该目录下
 *
 * 读取配置值 $smarty.config.配置名 或 #配置名#
 */

$smarty -> display('luoyin.html');