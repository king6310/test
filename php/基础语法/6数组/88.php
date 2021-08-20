<?php

/*
 * 数值有N个单元，同时只能操作一个单元。
 * 比如在循环中，也得一个单元一个单元来读取
 * 
 * 比如，刚读完第一个单元，下次来读取时，怎么“记住”该读取第2个单元的？
 * 
 * 在数组内部，有一个指针，指针指着某一个单元
 * 每循环一个单元，指针往尾部移动。
 * */
 
 //current,key.
 //next,prev,reset end
 
 $arr = array('中','华','人','民');
 
 //current “当前”的意思。该函数是 取出数组内部 指针指向的单元的值

echo current($arr),'<br />'; //“中”，数组刚建立，指针初始化指向第0个单元
echo current($arr),'<br />'; //还是“中”，因为内部的指针并没有往尾部移

//key,该函数是 取出数值内部 指针指向的单元的 "键"
echo key($arr),'<br />'; //华
echo key($arr),'<br />'; //1

next($arr);
echo current($arr),'<br />'; //人
echo key($arr),'<br />'; //2

next($arr);
echo current($arr),'<br />'; //民
echo key($arr),'<br />'; //3

next($arr);
var_dump(current($arr)),'<br />'; //false
var_dump(key($arr)),'<br />'; //null
