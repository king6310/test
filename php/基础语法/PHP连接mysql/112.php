<?php	
/*
如何来修改用户的信息？

流程：
1：建立到mysql的连接
2：选择库
3：写update语句，并发送查询
*/

//1:连接服务器
$conn = mysql_connect('localhost','root','root');
if(!$conn){
	echo "连接失败";
	exit;
}

//2:选择数据库
$sql = 'use test';
$rs = mysql_query($sql, $conn);

/*
//3:写update语句
$sql = "update stu set sname='stu10' where id=84";

//发送查询
if(mysql_query($sql, $conn)){
	echo '修改成功';
}
else{
	echo '修改失败';
}
*/

/*
要接收表单数据
 */

$sanme = addslashes($_POST['sanme']);
$yy = addslashes($_POST['yy']);
$id = $_POST['id'] + 0;

 $sql = "update stu set sanme='". $sanme ."' ,yy='". $yy ."' where id=". $id;

if(mysql_query($sql, $conn)){
	echo '修改成功';
}
else{
	echo '修改失败';
}

/*
之所以能注入，是因为利用表单值，故意传一些sql的语句的关键字，如单引号，#等。
我们转义，则把单引号转成\',这样,\'就和abcd等普通字符一样，构不成对sql语句的威胁了。
 */

 ?>

<a href="116.php">用户列表页</a>