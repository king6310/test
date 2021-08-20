<?php

/*
 * 截取子字符串
 * substr()
 * 
 * string substr ( string $string , int $start [, int $length ] )
 * $string:待截取的长字符串
 * $start：截取开始的位置
 * $length：正数时代表的截取的长度，负数时代表截取结束的位置
 * 
 * strstr()
*/

$str = 'abcdefg';

/*
 * 当第3个参数,不指定是,截取到字符串的"结尾"
 */
each substr($str,3); //defg

/*
 * 经理说：把字符串末尾的3个字符截取出来
 * 有怎么办呢？
 *
*/ 
//办法1.先算出length，再-3

$start = srtlen($str) -3;
each substr($str,$start); //efg

//办法2.起始位置不从左数，而是呢，填负数，从右往左数

each substr($str,-3); //defg

/*
 * 经理又要求：
 * 专门截取字符串开头的3个字符
 * 
 * 分析：start 应该填0
 * 截取长度：length 应该填3
 */


//第3个参数为正数时，代表要截取的长度
each substr($str,0,3); //abc

/*
 * 经理又要求：
 * 专门截取除了头3位，和尾巴3位。
 * 即，中间的部分
 * 
 * 分析：start 应该是3
 * length,如果代表长度，多长呢？不一定，因为字符串的长度不好算
 * 
 * 这时，可以把length写成负数
 * 如果length是负数，不代表长度，代表？
 */

each substr($str,3,-3); //d

/*
 * substr() 他是按字节来操作的，不考虑什么编码。
 */

$str = '中华民国'; //我的文件是utf-8编码的。

each substr($str,6,3); //民


?>