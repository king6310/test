<?php
/* Smarty version 3.1.29, created on 2016-12-08 14:58:51
  from "D:\WWW\smarty3\temp\luoyin.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_584904ab0885b6_71292354',
  'file_dependency' => 
  array (
    'cdd6168e2f3dfa81c593e130b8b8649d5e31e1b6' => 
    array (
      0 => 'D:\\WWW\\smarty3\\temp\\luoyin.html',
      1 => 1481180329,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_584904ab0885b6_71292354 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, 'site.conf', null, 0);
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <h2><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</h2>
    <p><?php echo $_smarty_tpl->tpl_vars['poen']->value;?>
</p>
    <p><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
</p>
    <p><?php echo $_GET['id'];?>
</p>
    <p><?php echo @constant('HEI');?>
</p>
    <address>
        类型：<?php echo $_smarty_tpl->smarty->ext->configload->_getConfigVariable($_smarty_tpl, 'site');?>
<br/>
        电话：<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'tel');?>

    </address>
</body>
</html><?php }
}
