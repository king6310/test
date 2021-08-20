<?php

//连接服务器
echo '<pre>';

$conn = mysql_connect('localhost','root','root');
if(!$conn){
	echo "连接失败";
	exit;
}

//选库
$sql = 'use test';
mysql_query($sql, $conn);

//查询
$sql = 'select * from stu';
$rs = mysql_query($sql, $conn);
var_dump($rs); //$rs 是豆浆的吸管

//接下来应该？ 沿着吸管取豆浆

//怎么取？ 有专门的工具函数 mysql_fetch_assoc/row/array/object

/*
mysql_fetch_assoc 取出来的是 关联数组
而且：
键 ---> 表的字段名
值 ---> 字段的值
Array
(
    [id] => 77
    [sname] => cswaqi
    [yy] => cswaqi
)
*/
print_r(mysql_fetch_assoc($rs));

/*
mysql_fetch_row 取出的结果是一个 索引数组
而且：
字符从左到右，索引依次是0,1,2...N
Array
(
    [0] => 75
    [1] => 100
    [2] => 6310
)
 */

print_r(mysql_fetch_row($rs));

/*
mysql_fetch_array 取出来的结果 既有数字索引，也有字段索引
是 前2者结果的 并集
Array
(
    [0] => 77
    [id] => 77
    [1] => gyjxvw
    [sname] => gyjxvw
    [2] => gyjxvw
    [yy] => gyjxvw
)
 */

print_r(mysql_fetch_array($rs));

/*
mysql_fetch_object 返回的是对象
stdClass Object
(
    [id] => 39
    [sname] => exmkys
    [yy] => exmkys
)
 */
print_r($obj = mysql_fetch_object($rs));

echo $obj->id;

?>