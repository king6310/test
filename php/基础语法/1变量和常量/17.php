<?php
/**
 * Created by PhpStorm.
 * User: kennyking
 * Date: 2016/5/24
 * Time: 20:44
 */
/*
 * 常量的命名规则
 * 常量的命名规则和变量一样
 */

define('hei',8846);

echo hei;

//但是，习惯上大写（语法上允许小写）

//常量也区分大小写
echo HEI;

/*
 * 如果引用了一个未曾定义的常量
 * 因为没定义该常量，自然找不到值
 * 最终把常量名当成字符串来输出。
 */