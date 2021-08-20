<?php
/* Smarty version 3.1.29, created on 2016-05-20 22:33:51
  from "D:\WWW\smarty3\temp\05.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_573f204fe4d884_47324925',
  'file_dependency' => 
  array (
    'eef1295e736050501c969da949b6935992518d05' => 
    array (
      0 => 'D:\\WWW\\smarty3\\temp\\05.html',
      1 => 1463754830,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_573f204fe4d884_47324925 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>刘备</title>
</head>
<body>
    <h2><?php echo $_smarty_tpl->tpl_vars['man']->value->name;?>
  <?php echo $_smarty_tpl->tpl_vars['man']->value->age;?>
</h2>
    <p><?php echo $_smarty_tpl->tpl_vars['man']->value->say();?>
</p>
</body>
</html><?php }
}
