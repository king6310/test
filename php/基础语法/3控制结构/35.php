<?php
/**
 * Created by PhpStorm.
 * User: kennyking
 * Date: 2016/5/30
 * Time: 16:16
 */

/*
 * 分支结构
 *
 * 顾名思义，有分支，就像一个大路，走了三岔口，该选择一个走下去了
 *
 */

//最简单的，单路分支
$age = 18;
if($age >= 18){
    echo '你已成年';
} //这个if中的代码，要么执行，要么不执行。
//括号中的表达式，如果为真，则执行，否则不执行

//双路分支，if/else

$year = 2012;
$birth = 1965;
$age = $year - $birth;

$age = 18;
if($age >28){
    echo '你是中年人';
}else{
    echo '你是有为青年人';
}

//if为真,则代码段1执行
//if为假，则代码段2执行
//if/else 中的两个代码，有且只有一段被执行

$today = '0920';
if($today == '0707'){
    echo '牛郎有时间';
}else{
    echo '织女有时间';
}

//想想，牛郎，织女永远见不到面了。
//if else 离得很近，但是没有缘分。


// 多路分支
$age = 34;

if($age <= 17){
    echo '少年';
}else if($age >= 18 && $age <= 28){
    echo '青年';
}else if($age >= 29 && $age <= 45){
    echo '中年';
}else{
    echo '老年';
}
