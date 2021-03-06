<?php
/**
 * Created by PhpStorm.
 * User: kennyking
 * Date: 2016/8/5
 * Time: 0:05
 */

/*
 * 假设如下场景：
 * 来客人了，需要安排书童，沏茶
 * 书童比较笨，需要你把步骤说的特别细
 */

//于是当客人1来的时候
echo '把水灌进水壶，烧开';
echo '把茶叶放到茶杯';
echo '往茶杯冲开水';
echo '端上茶杯';

//第二天，又来客人
//只好再对书童大喊4声

echo '把水灌进水壶，烧开';
echo '把茶叶放到茶杯';
echo '往茶杯冲开水';
echo '端上茶杯';

// 第三天.......

//思考：当客人来的时候，把“沏茶”这个过程执行一遍。
// 我这样对书童说：客人来的时候，把“那个过程执行一遍？”

//书童的疑问：那个过程？什么样的过程？

//教书童沏茶
//看好了，我把这4句话，写在一块

{
    echo '把水灌进水壶，烧开';
    echo '把茶叶放到茶杯';
    echo '往茶杯冲开水';
    echo '端上茶杯';
} //包成一个复合语句，一大句话


//再给这个复合语句，加上个名字，就是函数名
function qicha(){
    echo '把水灌进水壶，烧开';
    echo '把茶叶放到茶杯';
    echo '往茶杯冲开水';
    echo '端上茶杯';
} //此时，复合语句已经有一个名字了。

echo '<hr />';

qicha();

//这是最简单的函数

/*
 * 是从编程的角度来理解的
 *
 * 从编程角度看
 * 把若干语句，封装在一块，起一个名字
 *
 * 下次根据名字来调用这个封装的快，就可以称之为函数。
 * 
 */