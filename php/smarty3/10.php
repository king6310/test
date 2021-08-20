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
 * 2.foreach
 * 典型场景：二维数组的循环，如新闻列表，会员列表，商品列表
 * 从数据库取出N条商品，并且循环出商品
 *
 *
 * 大的流程：
 * 连接数据库，取得商品数组
 * 把数组赋给smarty
 * smarty把数据展示到模板
 * 模板中的标签进行循环
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

$smarty -> display('10.html');