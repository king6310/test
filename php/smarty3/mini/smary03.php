<?php
/**
 * Created by PhpStorm.
 * User: kennyking
 * Date: 2016/5/18
 * Time: 10:09
 */
$title = '20000';
$content = '您好，king';

include ('mini.php');
$mini = new mini();
$mini -> template_dir = 'templates';
$mini -> compile_dir = 'compile';

$mini -> assign('title',$title);
$mini -> assign('content',$content);
//print_r($mini -> _tpl_var); exit();
$mini -> dispaly('03temp.html');
?>