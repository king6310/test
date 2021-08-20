<?php
require('smarty3/libs/Smarty.class.php');
require('class_config.php');

/*
 *     ===笔记部分===
 *
 * 单模板多缓存
 *
 * 典型场景:为商品模板设置缓存,
 * 但是goods.php?id=n
 * 当缓存后，所有的商品页面，都一样了，因为被缓存了，这显然不合适
 *
 * 能否为同一个模板，生成不同的缓存文件呢？
 * 比如，根据id的不同，来生成各个商品的缓存页面
 *
 * 答：可以，用到“单模板多缓存”
 * 原理：生成缓存的时候，可以再传一个“缓存id”，
 * 如果id不同，生成的缓存文件则不同
 *
 * 你的那些参数要影响页面内容，就需要把那些参数，当成“缓存id”
 * 比如，page=3&cat=4，第4栏目的第3页，
 * page和cat都要影响结果，这两个参数都要写进缓存id才可以
 *
 * 经典参考：ecshop的缓存控制
 * $cache_id = sprintf('%%',crc32($cat_id.'-'.$page));
 */

$smarty = new MySmarty();


/*
根据地址的goods_id,来取商品的信息
 */

//开启缓存
$smarty -> caching =true;

//设置一个缓存的生成周期
$smarty -> cache_lifetime = 10;

//设置缓存目录，用于存储缓存文件
$smarty -> cache_dir = 'cache';

$goods_id = $_GET['goods_id']+0;

//有时出于调试目的，临时不让缓存，但又不想修改主代码，
//可以加1个选项
$smarty -> force_cache = true;

if(!$smarty -> isCached('14.html',$goods_id)){ //判断14.html有没有缓存起来
    $conn = mysql_connect('127.0.0.1','root','123456');
    mysql_query('set names utf8');
    mysql_query('use ruixin');
    $sql = 'select list_id,nid,tilte,time from netsys_produc_lists where list_id='.$goods_id;
    $rs = mysql_query($sql,$conn);
    $goods = mysql_fetch_assoc($rs);
    $smarty -> assign($goods);
    echo "走了数据库";
}

$smarty -> display('14.html',$goods_id);