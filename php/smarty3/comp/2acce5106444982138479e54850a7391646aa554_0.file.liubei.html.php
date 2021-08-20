<?php
/* Smarty version 3.1.29, created on 2016-12-08 14:46:27
  from "D:\WWW\smarty3\temp\liubei.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_584901c3101cb0_69964054',
  'file_dependency' => 
  array (
    '2acce5106444982138479e54850a7391646aa554' => 
    array (
      0 => 'D:\\WWW\\smarty3\\temp\\liubei.html',
      1 => 1481179586,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_584901c3101cb0_69964054 ($_smarty_tpl) {
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
        <tr>
            <td>兵器：</td>
            <td><?php echo $_smarty_tpl->tpl_vars['weapon']->value;?>
</td>
        </tr>
    </table>
    <table>
        <tr>
            <td>姓名：</td>
            <td><?php echo $_smarty_tpl->tpl_vars['zf']->value['name'];?>
</td>
        </tr>
        <tr>
            <td>年龄：</td>
            <td><?php echo $_smarty_tpl->tpl_vars['zf']->value['age'];?>
</td>
        </tr>
        <tr>
            <td>兵器：</td>
            <td><?php echo $_smarty_tpl->tpl_vars['zf']->value['weapon'];?>
</td>
        </tr>
    </table>
    <table>
        <tr>
            <td>姓名：</td>
            <td><?php echo $_smarty_tpl->tpl_vars['gy']->value[0];?>
</td>
        </tr>
        <tr>
            <td>年龄：</td>
            <td><?php echo $_smarty_tpl->tpl_vars['gy']->value[1];?>
</td>
        </tr>
        <tr>
            <td>兵器：</td>
            <td><?php echo $_smarty_tpl->tpl_vars['gy']->value['weapon'];?>
</td>
        </tr>
    </table>
</body>
</html><?php }
}
