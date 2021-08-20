<?php

require('./conn.php');

$sql = 'select * from msg';
$res = mysqli_query($conn, $sql);
// var_dump($res);

if(!$res)
{
    echo mysqli_error();
    exit();
}

$data = array();

while($row = mysqli_fetch_assoc($res))
{
    $data[] = $row;
}

// print_r($data);
require('./meglist.htm');

?>