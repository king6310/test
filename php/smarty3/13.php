<?php
require('smarty3/libs/Smarty.class.php');
require('class_config.php');

/*
 *     ===笔记部分===
 *
 * 变量调节器 modifier
 * 缓存 smarty的一个重要概念
 *
 * 缓存是什么意思？
 * 就是把页面内容保存在磁盘上，下次访问相同页面，直接返回保存内容
 * 减轻了数据库的压力
 */

$smarty = new MySmarty();

/*
 * 思考：如下数据，短期内不会变化，比如1小时 很少变化
 * 而1小时内，却有上千位用户访问
 *
 * 那么，这1000次，每次都是同样的内容，但访问了数据库1000次，
 * 这时，就产生了性能上的浪费
 *
 * smarty缓存的用法：
 * 1.开启
 * 2.配置缓存的生命周期
 * 3.判断是否缓存并是否从数据库取数据
 * 4.输出
 */

//开启缓存
$smarty -> caching =true;

//设置一个缓存的生成周期
$smarty -> cache_lifetime = 3600;

//设置缓存目录，用于存储缓存文件
$smarty -> cache_dir = 'cache';

if(!$smarty -> isCached('13.html')){ //判断13.html有没有缓存起来
    $conn = mysql_connect('127.0.0.1','root','123456');
    mysql_query('set names utf8');
    mysql_query('use ruixin');
    $sql = 'select list_id,nid,tilte,time from netsys_produc_lists limit 5';
    $rs = mysql_query($sql,$conn);

    $goods = array();
    while($row =mysql_fetch_assoc($rs)){
        $goods[] = $row;
    }
    echo '我走了数据库';

    //把数组赋给smarty对象
    $smarty -> assign('goods',$goods);
}


$time = time();
$smarty ->assign('time1',$time);
$smarty ->assign('time2',$time,true); //第3参数是nocache,为true,说明不缓存

function insert_welcome($parm){
    echo "你好，kinngkenny".rand(0,99). " 你的年龄是：".$parm['age']."岁";
}

$smarty -> display('13.html');