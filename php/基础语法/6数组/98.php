<?php

//数组函数讲解

/*
 * count 函数
 * 作用计算数组的单元个数[或对象的属性个数]
 * 
 * 注：count函数的参数，可以是数组，也可以是“非数组”
 * 返回值分3种情况讨论
 * 1.数组/对象，返回数组的单元个数/对象的属性个数
 * 2.NULL 
 * 3.非数组，也非NUll，通通返回1
 * 
 */

$arr =>array('a','b','c','d');
echo count($arr).'<br />'; //4

$str ='abcd';
echo count($str).'<br />'; //1

$nul = null;
echo count($nul).'<br />'; //0


//---在深入一点----//

$arr = array('a','b','c',array('d','e'));

echo count($arr),'<br />'; //4


/*
 * 刚才答5的同学，思路值得夸奖，因为他用了递归的思想。
 * 即，某单元如果是数组，继续进去数单元数量。
 */

echo count($arr,true),'<br />'; //6

/*
 * 第2个参数为true时，代表递归来计算数组的单元个数
 * 第1层 a,b,c, array(d,e) == 4个单元
 * 第2层 array(d,e) = 2单元
 * 
 * 共6个
 */


/*
 * array_key_exists
 * 数组 键 存在，用来判断数组有没有某一个键
 */


$arr = array('age'=>98,'height'=>176,'area'=>'北京',0=>'哈哈','kaka'=>NULL);

echo $arr,'<br />';

echo $arr['abc'],'<br />';

//能不能先判断数组有没有某单元？

/*
 * 有2个办法，用isset
 */

if(isset($arr['abc'])){
	echo $arr['abc'];
}else{
	echo '$arr['acb'] 不存在';
}

// 用函数 array_key_exists来判断

if( array_key_exists('abc',$arr)){
	echo '有abc键';
}else{
	echo '$arr['acb'] 不存在';
}

var_dump(isset($arr['kaka']));
var_dump(isset[0]);

/*
 * 用isset和array_key_exists来判断
 * 有什么区别呢？
 * 
 * 1.
 * isset不是函数，是语法结构
 * 而array_key_exists是函数
 * 
 * 速度上，isset省去了一次函数调用，速度要快些
 * 
 * 
 * 2.isset来判断是根据值来判断的
 * 如果某个单元的值，为 NULL，依然是返回false
 * 
 * 因为isset是靠值来判断的。
 * 
 * 如果对于键/值都不固定，不确定是否有NUll存在
 * 请用 array_key_exists来判断
 *
 * 3.isset是用来判断变量是否设置的，不限于数组
 * 
 * //如果数组是动态生成，不好判断值/键是，用array_key_exists保险
 */
