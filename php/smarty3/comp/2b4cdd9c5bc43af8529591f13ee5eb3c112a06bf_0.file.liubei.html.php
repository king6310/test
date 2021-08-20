<?php
/* Smarty version 3.1.29, created on 2016-05-18 22:45:24
  from "D:\WWW\al\temp\liubei.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_573c8004033a12_74739206',
  'file_dependency' => 
  array (
    '2b4cdd9c5bc43af8529591f13ee5eb3c112a06bf' => 
    array (
      0 => 'D:\\WWW\\al\\temp\\liubei.html',
      1 => 1463582670,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_573c8004033a12_74739206 ($_smarty_tpl) {
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
