<?php
/**
 * Created by PhpStorm.
 * User: kennyking
 * Date: 2016/5/23
 * Time: 22:07
 */

/*
 * 变量的检测
 *
 * 在讲解NULL的过程，有些变量，根本就没有声明过，
 * 或被unset掉了，再去引用变量的时候，提示一个notice
 *
 * 问：我能不能，在用这个变量之前，先判断这个变量有没有
 * 如果有，我再进一步操作。
 *
 * 答：可以，即---如何检测一个变量已存在。
 *
 * 知识点：用isset来检验 一个变量是否存在。
 */

$age = 22;
if(isset($age)){
    echo '$age已经声明了';
}else{
    echo '这个变量根本就不存在';
}

//$user根本不存在
if(isset($user)){
    echo '$age已经声明了';
}else{
    echo '这个变量根本就不存在';
}

