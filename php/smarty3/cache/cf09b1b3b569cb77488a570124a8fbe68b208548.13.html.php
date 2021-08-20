<?php
/* Smarty version 3.1.29, created on 2016-12-08 15:52:23
  from "D:\WWW\smarty3\temp\13.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => true,
  'version' => '3.1.29',
  'unifunc' => 'content_584911376d5f64_41924941',
  'file_dependency' => 
  array (
    'cf09b1b3b569cb77488a570124a8fbe68b208548' => 
    array (
      0 => 'D:\\WWW\\smarty3\\temp\\13.html',
      1 => 1463900543,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_584911376d5f64_41924941 ($_smarty_tpl) {
$_smarty = $_smarty_tpl->smarty; if (!is_callable('smarty_modifier_date_format')) require_once 'D:\\WWW\\smarty3\\smarty3\\libs\\plugins\\modifier.date_format.php';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Title</title>
</head>
<body>
    
        缓存
    smarty在页面缓存的情况下，可以设置部分内容不缓存，
    这比较有用，
    因为页面的某部分，比如是随机广告，股票信息，时间等等
    这些，就适宜缓存起来

    在smarty中，想控制局部不缓存，方法非常多
    1.在标签中控制，该标签不缓存（$标签 nocache）
    2.控制一片标签，不缓存{nocache}XXX{/nocache}控制的区域比较大
    3.在PHP中赋值时，就控制不缓存[smarty3新增]
    注意：不缓存的标签，要保证总能从HPP处得到值
    4.{insert name="xxx" parm1="v1" parm2="v2"} 这个方式来写
    原理是：调用 insert_xxx{array(parm1="v1" parm2="v2")}的返回值，来显示的
    
    <h2>当前时间:2016-12-08 15-52-23</h2>
    <h2>当前时间:<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['time1']->value,"%Y-%m-%d %H-%M-%S");?>
</h2>
    <h2>当前时间:<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['time1']->value,"%Y-%m-%d %H-%M-%S");?>
</h2>
    <h2>当前时间:<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['time2']->value,"%Y-%m-%d %H-%M-%S");?>
</h2>
    <p><?php echo insert_welcome(array (
  'age' => '21',
),$_smarty_tpl);?></p>
    <table  width="40%" border="1" cellspacing="0" cellpadding="0">
        <tr>
            <td>序号</td><td>商品名</td><td>商品价格</td>
        </tr>
            </table>
</body>
</html><?php }
}
