<?php
/**
 * Created by PhpStorm.
 * User: kennyking
 * Date: 2016/8/5
 * Time: 0:05
 */

//函数参数与默认值

function sum($x,$y=3,$z=4){
    return $x + 2*$y + 3*$z;
}

echo sum(1);

