<?php
/**
 * Created by PhpStorm.
 * User: kennyking
 * Date: 2016/5/26
 * Time: 22:35
 */

//三元运算符
/*
 * 条件 ? 返回值1 : 返回值2
 * 如果条件为真，则返回值1，否则，返回值2
 */

//比如在网站中判断一个人有没有登陆；
//如果登陆，用户名不为空，则显示其用户名
//如果没登陆，用户名为空，则显示 ‘游客’
$user = '张三';
if($user != ''){
    echo $user;
}else{
    echo '游客';
}

echo '<br />';

$res = ($user !='' ? $user:'游客');
echo $res.'<br />';

$user ='';
echo $user !='' ? $user : '游客';

//程序如果没有三元运算符，可以用什么代替？
//可以用if/else代替
//三元只是一个简化的写法
//而且效率没有if/else高