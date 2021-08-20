<meta chrset=utf8>
<?php

require('./conn.php');

$id=$_GET['id'];
$sql = "delete from msg where id='$id'";
$res = mysqli_query($conn, $sql);
if(!$res)
{
    echo mysqli_error();
    exit();
}
else
{
    // echo '删除成功';
    // require('./2.php');
    header('location:2.php');
}

?>