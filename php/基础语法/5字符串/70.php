<?php

/*
 * php中，字符串函数和数组函数最多，
 * 
 * 字符串和数组，有2个函数，是他们的桥梁，非常频繁的使用。
 * 就是implode，和explode
*/

//有的网站，写文章是，让我们填写标签，"多个标签用逗号隔开"
$str = 'abc,中国，美国，日本';

//explode,是根据指定的分隔符，把字符串拆成数组。
$arr = explode(',',$str);
print_r($arr);

//implode，是根据指定的连接符，把数组再拼接成字符串

$arr = explode(',',$str);
echo implode('~',$arr);

//你可以只传一个数组做参数，不指定连接符，
//这样，将把数组单元直接拼接
echo implode($arr);