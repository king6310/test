<?php
/**
 * Created by PhpStorm.
 * User: kennyking
 * Date: 2016/5/24
 * Time: 21:17
 */

//常量的检测
//我们知道，一个变量是否已声明，可以检测到，用isset即可检测

//开发时，我想知道，某个常量有没有定义，如果没定义，我就去定义。
//如果还有定义，我就去定义

//怎么判断一个常量是否定义过呢？
//用defined('常量名')；即可检测
//如果常量已定义，返回true
//如果常量没定义，返回false

if(defined('HEI')){
    echo 'HEI常量已经定义<br />';
}else{
    echo 'HEI常量还没定义，接下来我帮你定义<br />';
    define('HEI','8888');
}

if(defined('HEI')){
    echo 'HEI常量已经定义<br />';
}else{
    echo 'HEI常量还没定义，接下来我帮你定义<br />';
    define('HEi','8888');
}


