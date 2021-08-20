<?php

require('./conn.php');

$id = $_GET['id'];

if(empty($_POST))
{
    $sql = "select * from msg where id='$id'";
    $res = mysqli_query($conn, $sql);
    if(!$res)
    {
        echo mysqli_error();
        exit();
    }

    $arr = mysqli_fetch_assoc($res);
    // print_r($arr);

    require('./megedit.htm');
}
else
{

    $sql = "update msg set name='$_POST[name]',email='$_POST[email]',content='$_POST[content]' where id=$id";
    $res = mysqli_query($conn, $sql);
    if(!$res)
    {
        echo mysqli_error();
        exit();
    }
    else
    {
        echo '修改成功';
    }
}
?>