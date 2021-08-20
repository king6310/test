<?php

/*
 * strcmp 二进制安全字符串比较
*/

if (strcmp('D','a') > 0){
	echo 'D &gt; a';
}else if(strcmp('d','a') < 0){
	echo 'D &lt; a';
}else{
	echo '相等';
};

//D比a还小，因为是按二进制中 ascii码比的。
