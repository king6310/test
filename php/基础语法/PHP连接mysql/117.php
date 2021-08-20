<?php

$conn = mysql_connect('localhost','root','root');
if(!$conn){
	echo "连接失败";
	exit;
}

//选库
$sql = 'use test';
mysql_query($sql, $conn);

$id = isset($_GET['id']) ? $_GET['id'] + 0 : 0;

$sql = 'select * from stu where id='.$id;
$rs = mysql_query($sql, $conn);

if(!$rs) {
	echo '查询失败';
	exit;
}

$stu = mysql_fetch_assoc($rs); //为什么不用while取？

if(empty($stu)){
	echo '没有这个用户';
	exit;
}

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="author" content="http://www.softwhy.com/" />
<title>修改表</title>
</head>
<body>
	<form action="112.php" method="post">
		<p>
			接收地址栏的参数
			并根据参数拼接sql语句查询
		</p>
		学生id:<input type="text" name="id" value="<?php echo $stu['id']; ?>"><br/>
		学生姓名:<input type="text" name="sanme" value="<?php echo $stu['sanme']; ?>"><br/>
		学生yy:<input type="text" name="yy" value="<?php echo $stu['yy']; ?>"><br/>
		<input type="submit" value="提交修改" />
	</form>
</body>
</html>