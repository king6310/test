<?php

//array_flip
//交换键值，即值做键，键做值


$arr = array(0=>'a',1=>'b',2=>'c');

print_r(array_flip($arr));

print_r($arr); //原数组没变，只是做为参数传给函数而已

/*
 * 疑问，如下情况
 * 键值对调后，出现2个'b'键。
 * 而数组的键，不可能重复的。
 * 这种情况怎么处理？
 */

$arr = array(0=>'a',1=>'b',2=>'b',3=>'c');

print_r(array_flip($arr));

/*
 * 分析：
 * array('a'=>0,'b'=>2,'c'=>3); //后面的'b'=>2覆盖了前面的。
 */