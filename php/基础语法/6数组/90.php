<?php
 
//不用foreach来循环数组
//就用for循环来循环数组

$arr = array('name'=>'张三','age'=>'28','height'=>'176','area'=>'山西');
//以昨天的知识，用for循环是没办法循环此数组的。


//但结合游标操作之后，就可以处理
for(;current($arr);next($arr)){
	echo current($arr),'<br />';
}

//用for循环也能循环关联数组
//这里只是为了练习游标操作，用for来处理，在实际开发中，用foreach


//来点更有意思的，打一个单元，挑一个单元

$arr = array('中','华','人','民');

for(;current($arr);next($arr),next($arr)){

	echo current($arr),'<br />';
}

//再来点有意思的，走2步，退一步
//什么时候走2步，什么时候退1步，怎么标志？
echo '<br />';

reset($arr); //想想这句话为什么？

for($Flag = true;current($arr);){
	echo current($arr),'<br />';
	if($Flag){
		next($arr);
		next($arr);
		$Flag = false;
	}else{
		prev($arr);
		$Flag = true;
	}
}
