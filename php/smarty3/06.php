<?php
require('smarty3/libs/Smarty.class.php');
require('class_config.php');

$smarty = new MySmarty();
//new的是MySmarty类，而MySmarty类中，已经把相关属性配置完毕了
//所以得到的对象，本身就已经配置好的

class human{
    public $name = '张三';
    public $age = '26';
    public  function say(){
        return '你爸是李刚吗？';
    }
}
$man = new human();

$smarty -> assign('man',$man);

$smarty -> display('05.html');