<?php
/* Smarty version 3.1.29, created on 2016-05-22 15:24:03
  from "D:\WWW\smarty3\temp\13.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => true,
  'version' => '3.1.29',
  'unifunc' => 'content_57415e933be957_06782343',
  'file_dependency' => 
  array (
    'cf09b1b3b569cb77488a570124a8fbe68b208548' => 
    array (
      0 => 'D:\\WWW\\smarty3\\temp\\13.html',
      1 => 1463900543,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57415e933be957_06782343 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'D:\\WWW\\smarty3\\smarty3\\libs\\plugins\\modifier.date_format.php';
echo '/*%%SmartyNocache:1035257415e93321540_84220830%%*/<?php $_smarty = $_smarty_tpl->smarty; if (!is_callable(\'smarty_modifier_date_format\')) require_once \'D:\\\\WWW\\\\smarty3\\\\smarty3\\\\libs\\\\plugins\\\\modifier.date_format.php\';
?>/*/%%SmartyNocache:1035257415e93321540_84220830%%*/';
$_smarty_tpl->compiled->nocache_hash = '1035257415e93321540_84220830';
?>
<!DOCTYPE html>
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
    
    <h2>当前时间:<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['time1']->value,"%Y-%m-%d %H-%M-%S");?>
</h2>
    <h2>当前时间:<?php echo '/*%%SmartyNocache:1035257415e93321540_84220830%%*/<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars[\'time1\']->value,"%Y-%m-%d %H-%M-%S");?>
/*/%%SmartyNocache:1035257415e93321540_84220830%%*/';?>
</h2>
    <h2>当前时间:<?php echo '/*%%SmartyNocache:1035257415e93321540_84220830%%*/<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars[\'time1\']->value,"%Y-%m-%d %H-%M-%S");?>
/*/%%SmartyNocache:1035257415e93321540_84220830%%*/';?>
</h2>
    <h2>当前时间:<?php echo '/*%%SmartyNocache:1035257415e93321540_84220830%%*/<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars[\'time2\']->value,"%Y-%m-%d %H-%M-%S");?>
/*/%%SmartyNocache:1035257415e93321540_84220830%%*/';?>
</h2>
    <p><?php echo Smarty_Internal_Nocache_Insert::compile ('insert_welcome',array('age' => "21"), $_smarty_tpl, 'null');?>
</p>
    <table  width="40%" border="1" cellspacing="0" cellpadding="0">
        <tr>
            <td>序号</td><td>商品名</td><td>商品价格</td>
        </tr>
        <?php
$_from = $_smarty_tpl->tpl_vars['goods']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_g_0_saved_item = isset($_smarty_tpl->tpl_vars['g']) ? $_smarty_tpl->tpl_vars['g'] : false;
$__foreach_g_0_saved_key = isset($_smarty_tpl->tpl_vars['k']) ? $_smarty_tpl->tpl_vars['k'] : false;
$_smarty_tpl->tpl_vars['g'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable();
$__foreach_g_0_first = true;
$_smarty_tpl->tpl_vars['g']->iteration=0;
$_smarty_tpl->tpl_vars['g']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['g']->value) {
$_smarty_tpl->tpl_vars['g']->_loop = true;
$_smarty_tpl->tpl_vars['g']->iteration++;
$_smarty_tpl->tpl_vars['g']->first = $__foreach_g_0_first;
$__foreach_g_0_first = false;
$__foreach_g_0_saved_local_item = $_smarty_tpl->tpl_vars['g'];
?>
        <tr <?php if ($_smarty_tpl->tpl_vars['g']->first%2) {?> bgcolor="#2e8b57" <?php }?>>
            <td><?php echo $_smarty_tpl->tpl_vars['g']->iteration;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['g']->value['tilte'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['g']->value['nid'];?>
</td>
        </tr>
        <?php
$_smarty_tpl->tpl_vars['g'] = $__foreach_g_0_saved_local_item;
}
if ($__foreach_g_0_saved_item) {
$_smarty_tpl->tpl_vars['g'] = $__foreach_g_0_saved_item;
}
if ($__foreach_g_0_saved_key) {
$_smarty_tpl->tpl_vars['k'] = $__foreach_g_0_saved_key;
}
?>
    </table>
</body>
</html><?php }
}
