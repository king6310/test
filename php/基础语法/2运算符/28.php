<?php
/**
 * Created by PhpStorm.
 * User: kennyking
 * Date: 2016/5/26
 * Time: 21:33
 */

//逻辑反
//一个命题如果是真命题，则其反命题，是假命题

$a = true;

if($a){
    echo 'hello';
}else{
    echo 'world';
} // hello
echo '<br />';

if(!$a){
    echo 'hello';
}else{
    echo 'world';
} // world

//$a为真，因此 !$a,即$a的反命题，为假