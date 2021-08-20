<?php

//所有的用户列表

$conn = mysql_connect('localhost','root','root');
if(!$conn){
	echo "连接失败";
	exit;
}

//选库
$sql = 'use test';
mysql_query($sql, $conn);


//查询
$sql = 'select * from stu';
$rs = mysql_query($sql, $conn);


while($row = mysql_fetch_assoc($rs)){
    $list[] = $row;
}

//print_r($list);

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="author" content="http://www.softwhy.com/" />
<title>查询表</title>
</head>
<body>
    <h2>公益一期学员列表</h2>
    <pre>
        接下来，我们想达到如下 效果：
        点击谁，就修改谁。

        具体：点击84号用户，则来到一张表单页面。
        表单的值 正好是33号用户的信息。

        提交后，则修改33号用户

        思路：
        点击N号时，把N作为参数传过去。
        根据参数拼接sql语句，来查询N号用户
        查出来的结果，作为表单的默认值。
    </pre>
    <table>
        <tr>
            <td>id</td>
            <td>姓名</td>
            <td>yy</td>
            <td>操作</td>
        </tr>
        <?php
        foreach($list as $v){
            echo '<tr>';
            echo '<td>'. $v['id'] .'</td>';
            echo '<td>'. $v['sanme'] .'</td>';
            echo '<td>'. $v['yy'] .'</td>';
            echo '<td><a href="117.php?id='. $v['id'] .'">编辑</a></td>';
            echo '</tr>';
        }
        ?>
    </table>
</body>
</html>