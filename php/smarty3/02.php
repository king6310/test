<?php
/**
 * Created by PhpStorm.
 * User: kennyking
 * Date: 2016/5/18
 * Time: 18:50
 */
//引入smarty
require('smarty3/libs/Smarty.class.php');

//实例化
$smarty = new Smarty();
//print_r($smarty);

//配置模板目录和编译目录
$smarty -> template_dir = 'temp';
$smarty -> compile_dir = 'comp';

//从数据库取出会员信息，往往是数组形式
$user = array('name' => '刘备','age' => 28,'weapon' => '双股剑');

$smarty -> assign('name',$user['name']);
$smarty -> assign('age',$user['age']);
$smarty -> assign('weapon',$user['weapon']);

$zf = array('name' => '张飞','age' => 25,'weapon' => '丈八蛇矛');
$smarty -> assign('zf',$zf);

$gy = array(0 => '关羽',1 => 25,'weapon' => '青龙偃月刀');
$smarty -> assign('gy',$gy);

$smarty -> display('liubei.html');

/*
 * 总结：smarty可以赋字符串，数字等值，
 * 也可以赋给标签一个‘数组’。
 * 在模板里解析数组时
 * 用{$标签.key},或者{$标签[index]}
 *
 * 当键为字符串时，即关联数组，只能用$标签.key
 * 当键为数字时，即索引数组时，用$标签[index],或$标签.key
 */
?>