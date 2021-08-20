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
			method是表单数据的传递方法，一般用get,post<br />
			action是数据提交到的目标网站
		</p>
		学生id:<input type="text" name="id"><br/>
		学生姓名:<input type="text" name="sname"><br/>
		学生yy:<input type="text" name="yy"><br/>
		<input type="submit" value="提交修改" />
	</form>
</body>
</html>