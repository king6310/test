<?php
/* Smarty version 3.1.29, created on 2016-05-22 13:49:29
  from "D:\WWW\smarty3\temp\13.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57414869dbc050_81720952',
  'file_dependency' => 
  array (
    'cf09b1b3b569cb77488a570124a8fbe68b208548' => 
    array (
      0 => 'D:\\WWW\\smarty3\\temp\\13.html',
      1 => 1463896167,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57414869dbc050_81720952 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Title</title>
</head>
<body>
    
        缓存
    
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
