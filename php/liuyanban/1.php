<?php

require('./conn.php');

// print_r($_POST);
if(empty($_POST))
{
    require('./index.htm');
}
else
{
    /* $conn = mysqli_connect('localhost', 'root', 'root');
    mysqli_query($conn, 'set names utf8');
    mysqli_query($conn, 'use test'); */

    $sql = "insert into msg(name, email, content) values ('$_POST[name]', '$_POST[email]', '$_POST[content]')";
    $res = mysqli_query($conn, $sql);
    if(!$res)
    {
        echo mysqli_error();
        exit();
    }
    else
    {
        echo '插入成功';
    }
}
?>