<?php
/* Smarty version 3.1.29, created on 2016-05-20 21:38:18
  from "D:\WWW\smarty3\temp\04.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_573f134ad4bcf9_82301816',
  'file_dependency' => 
  array (
    'e99c2ef221cd0721a19c1ca26f07a9795c68dc56' => 
    array (
      0 => 'D:\\WWW\\smarty3\\temp\\04.html',
      1 => 1463751496,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_573f134ad4bcf9_82301816 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>刘备</title>
</head>
<body>
    <table>
        <tr>
            <td>姓名：</td>
            <td><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</td>
        </tr>
        <tr>
            <td>年龄：</td>
            <td><?php echo $_smarty_tpl->tpl_vars['age']->value;?>
</td>
        </tr>
    </table>
    <h2><?php echo $_smarty_tpl->tpl_vars['arr']->value['tar']['row']['he'];?>
</h2>
    <p><?php echo $_smarty_tpl->tpl_vars['ust']->value[0];?>
</p>
    <p><?php echo $_smarty_tpl->tpl_vars['ust']->value[1];?>
</p>
</body>
</html><?php }
}
