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

/*
 * 如果smarty的标签的定界符[}与css的{}冲突了
 * 可以用如下2种办法来解决：
 * 1.配置smarty左右定界符
 * 2.也可以用{literal}{/literal}标签，来告诉smarty,此处照常输出，不用解析
 */
//$smarty ->left_delimiter = '';
//$smarty ->right_delimiter = '';

$title = '《哥的传说》';
$content = '不要迷恋哥，哥只是个传说！哥早已不在江湖，江湖上却流传着哥的传说';

//赋值
$smarty -> assign('title',$title);
$smarty -> assign('content',$content);

$smarty -> display('news.html');

?>