<?php
require('smarty3/libs/Smarty.class.php');
require('class_config.php');

/*
 *     ===笔记部分===
 *
 * 变量调节器 modifier
 *
 */

$smarty = new MySmarty();

$conn = mysql_connect('127.0.0.1','root','123456');
mysql_query('set names utf8');
mysql_query('use ruixin');
$sql = 'select list_id,nid,tilte,time from netsys_produc_lists limit 5';
$rs = mysql_query($sql,$conn);

$goods = array();
while($row =mysql_fetch_assoc($rs)){
    $goods[] = $row;
}

//把数组赋给smarty对象
$smarty -> assign('goods',$goods);
$smarty -> assign('poem','THIS Is BEIJINg');

$smarty -> display('12.html');