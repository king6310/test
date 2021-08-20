<?php
/**
 * Created by PhpStorm.
 * User: kennyking
 * Date: 2016/8/5
 * Time: 0:05
 */

/*
 * 参数默认值
 *
 */

//来人，报国际
//要是指明自己是某国人，即说我来自某个
//不指明，就默认为中国
function intro($kangchui='中国'){
    echo '我来自',$country,'<br />';
}

intro('美国');

intro();

/*
 * 默认参数，并不能改变 实参与形参 严格按顺序赋值的原则
 */

function sum($x=4,$y,$z){
    return 2*$x + 3*$y + 1*$z;
}

sum(5,6); //行吗?

/*
 * 5 ---> $x
 * 6 ---> $y
 *
 * null ---> $z
 *
 */
