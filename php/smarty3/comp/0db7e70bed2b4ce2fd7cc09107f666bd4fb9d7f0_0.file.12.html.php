<?php
/* Smarty version 3.1.29, created on 2016-12-08 15:50:25
  from "D:\WWW\smarty3\temp\12.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_584910c1a158c7_50262399',
  'file_dependency' => 
  array (
    '0db7e70bed2b4ce2fd7cc09107f666bd4fb9d7f0' => 
    array (
      0 => 'D:\\WWW\\smarty3\\temp\\12.html',
      1 => 1481183419,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_584910c1a158c7_50262399 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'D:\\WWW\\smarty3\\smarty3\\libs\\plugins\\modifier.date_format.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Title</title>
</head>
<body>
    
        <h2>变量调节器</h2>
        变量调节器，是在模板中，修改变量的显示形式的一种功能
        通过变量调节器，来对变量的值进行微调
        比如 此例中，把时间戳微调成日期
        变量调节器的本质是一个函数，
        这个函数，以标签对应的变量值为参数，然后运算，
        把返回值，显示在标签中
    
    <h2>布尔商城商品列表</h2>
    <table  width="40%" border="1" cellspacing="0" cellpadding="0">
        <tr>
            <td>序号</td><td>商品名</td><td>商品价格</td><td>发布时间</td>
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
$_smarty_tpl->tpl_vars['g']->iteration=0;
$_smarty_tpl->tpl_vars['g']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['g']->value) {
$_smarty_tpl->tpl_vars['g']->_loop = true;
$_smarty_tpl->tpl_vars['g']->iteration++;
$__foreach_g_0_saved_local_item = $_smarty_tpl->tpl_vars['g'];
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['g']->iteration;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['g']->value['tilte'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['g']->value['nid'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['g']->value['time'];?>
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
    </table><br/>
    <table  width="40%" border="1" cellspacing="0" cellpadding="0">
        <tr>
            <td>序号</td><td>商品名</td><td>商品价格</td><td>发布时间</td>
        </tr>
        <?php
$_from = $_smarty_tpl->tpl_vars['goods']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_g_1_saved_item = isset($_smarty_tpl->tpl_vars['g']) ? $_smarty_tpl->tpl_vars['g'] : false;
$__foreach_g_1_saved_key = isset($_smarty_tpl->tpl_vars['k']) ? $_smarty_tpl->tpl_vars['k'] : false;
$_smarty_tpl->tpl_vars['g'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['g']->iteration=0;
$_smarty_tpl->tpl_vars['g']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['g']->value) {
$_smarty_tpl->tpl_vars['g']->_loop = true;
$_smarty_tpl->tpl_vars['g']->iteration++;
$__foreach_g_1_saved_local_item = $_smarty_tpl->tpl_vars['g'];
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['g']->iteration;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['g']->value['tilte'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['g']->value['nid'];?>
</td><td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['g']->value['time'],"%Y-%m-%d %H:%M:%S");?>
</td>
        </tr>
        <?php
$_smarty_tpl->tpl_vars['g'] = $__foreach_g_1_saved_local_item;
}
if ($__foreach_g_1_saved_item) {
$_smarty_tpl->tpl_vars['g'] = $__foreach_g_1_saved_item;
}
if ($__foreach_g_1_saved_key) {
$_smarty_tpl->tpl_vars['k'] = $__foreach_g_1_saved_key;
}
?>
    </table>
    <p><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['poem']->value, 'UTF-8');?>
</p>
    <p><?php echo mb_strtolower($_smarty_tpl->tpl_vars['poem']->value, 'UTF-8');?>
</p>
    <p><?php echo mb_strtolower(mb_strtoupper($_smarty_tpl->tpl_vars['poem']->value, 'UTF-8'), 'UTF-8');?>
</p>
</body>
</html><?php }
}
