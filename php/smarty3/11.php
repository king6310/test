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
 * 3.section
 * 4.while
 *
 * {foreach}可以做到任何{section}做到的功能，而且更简洁和清晰的语法，一般更推荐使用{foreach}语法
 *
 */

$smarty = new MySmarty();

$conn = mysql_connect('127.0.0.1','root','123456');
mysql_query('set names utf8');
mysql_query('use ruixin');
$sql = 'select list_id,nid,tilte from netsys_produc_lists limit 5';
$rs = mysql_query($sql,$conn);

$goods = array();
while($row =mysql_fetch_assoc($rs)){
    $goods[] = $row;
}

//把数组赋给smarty对象
$smarty -> assign('goods',$goods);
$smarty -> assign('age',6);

$smarty -> display('11.html');