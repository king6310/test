<?php
echo '<pre>';

$arr = array('东','南','西','北');

echo array_shift($arr),'<br />'; // 东
print_r($arr);  // 南西北

echo array_shift($arr),'<br />'; // 南
print_r($arr);  // 西北

/*
array_shift 总结
1：作用是弹出并剪切第一个单元
2：返回值是弹出的单元值
3：array_shift是引用传值，直接影响参数数组的值
4：array_shift在剪切首单元之后，还会把索引重新整理，从0开始计数，
但，如果是字符串做键，则不受影响。
*/

$arr = array();

echo '现在有',array_unshift($arr,'东'),'单元了<br />';
print_r($arr);

echo '现在有',array_unshift($arr,'南'),'单元了<br />';
print_r($arr);

echo '现在有',array_unshift($arr,'西'),'单元了<br />';
print_r($arr);

echo '现在有',array_unshift($arr,'北'),'单元了<br />';
print_r($arr);

/*
array_unshift 总结
1：作用是把入单元追加到数组的头部
2：返回值是追加后，新数组的单元个数
3：引用传值，直接影响参数数
4：在头部追加单元之后，索引从0重新排。
*/

echo '</pre>';
?>