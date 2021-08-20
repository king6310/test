<?php
require('smarty3/libs/Smarty.class.php');
require('class_config.php');

/*
 *     ===笔记部分===
 *
 * smarty缓存的删除
 *
 */

$smarty = new MySmarty();

$goods_id = $_GET['goods_id']+0;


// 给2个参数，（模板名，缓存id）
// 如果只指定模板名，不指定缓存id，则该模板对应的所有缓存都会被删掉
$smarty -> clearCache('14.html',$goods_id);

echo '删除缓存成功';