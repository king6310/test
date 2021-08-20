<?php
//用for循环或者while循环，配置strpos
//计算某父串中，子串出现的个数？

/*
 * 函数名 subnum
 * 参数： string $str 待查父串,
 * string $sub 子串,
 * return ,即子串个数
 * 
 */


/*
 * 思路：
 * 先从头查找子串，找到后，则偏移过去子串，继续查找，直到查不到。
 */

function subnum($str,$sub){
	$sublen = strlen($sub); //计算出子串的长度。
	$strlen = strlen($str); //计算出父串的长度。
	
	if($sublen > $strlen){
		return 0;
	} //如果子串比父串长，没必要找了
	
	for($offset = 0;$num=0;($offset = strpos($str,$sub,$offset))!==false;){
		$num += 1;
		$offset += $sublen;
	}
	
	return $num;
}


$str = 'how are your fine thank you,fine,may be you are right，256，I dont think so,let me see';

echo '找到',subnum($str,'fine'),'个fine';


echo '找到',substr_count($str,'fine'),'个fine';

?>