<?php
/**
 * Created by PhpStorm.
 * User: kennyking
 * Date: 2016/5/23
 * Time: 22:37
 */
//变量的销毁

if(isset($age)){
    echo "age变量已设置<br>";
}else{
    echo "age变量未设置<br>";
}

$age = 22;

if(isset($age)){
    echo "age变量已设置<br>";
}else{
    echo "age变量未设置<br>";
}

unset($age);    //$age变量被销毁了

if(isset($age)){
    echo "age变量已设置<br>";
}else{
    echo "age变量未设置<br>";
}

//为什么要把变量销毁
//因为内存空间是有限的，销毁变量，可以腾出空间
//拆迁就是unset，拆掉的是旧房子，腾出的是地皮，用来建新房

