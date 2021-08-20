<?php
/* Smarty version 3.1.29, created on 2016-05-22 15:39:24
  from "D:\WWW\smarty3\temp\14.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5741622c349549_61108905',
  'file_dependency' => 
  array (
    '83d018d7a1d54f99da47b579ee55d1627703a782' => 
    array (
      0 => 'D:\\WWW\\smarty3\\temp\\14.html',
      1 => 1463902732,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5741622c349549_61108905 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '127375741622c303791_76235299';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Title</title>
</head>
<body>
    

    

    <table  width="40%" border="1" cellspacing="0" cellpadding="0">
        <tr>
            <td>序号</td><td>商品名</td><td>商品价格</td>
        </tr>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['tilte']->value;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['nid']->value;?>
</td>
        </tr>
    </table>
</body>
</html><?php }
}
