<?php
/* Smarty version 3.1.29, created on 2016-05-21 18:14:11
  from "D:\WWW\smarty3\temp\08.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_574034f3d3dc35_82800766',
  'file_dependency' => 
  array (
    '1b983df40c01a2889e258cfcc611456f9f14e821' => 
    array (
      0 => 'D:\\WWW\\smarty3\\temp\\08.html',
      1 => 1463825650,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_574034f3d3dc35_82800766 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>刘备</title>
</head>
<body>
    <p>
    <?php if ($_smarty_tpl->tpl_vars['price']->value > 5000) {?>驴包<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['price']->value > 10000) {?>
        实惠
    <?php } else { ?>
        不实惠
    <?php }?>
    </p>
    <p>
    <?php if ($_smarty_tpl->tpl_vars['height']->value == 180) {?>
        <?php echo $_smarty_tpl->tpl_vars['height']->value;?>
完美身材
    <?php }?>
    <p>
        <?php if ($_smarty_tpl->tpl_vars['age']->value%2 == 0) {?>
        你的年龄是3的整数倍
        <?php } else { ?>
        你的年龄不是3的整数倍
        <?php }?>
    <p>
    <p>
        从地址上传值，判断是星期几<br/>
        如果是0，7，则为周日，如果是6，则为周六，其余判断为工作日
    </p>
    <p>
        <?php if ($_GET['today'] == 0 || $_GET['today'] == 7) {?>
            今天是周日
        <?php } elseif ($_GET['today'] == 6) {?>
            今天是周六
        <?php } else { ?>
            今天是工作日
        <?php }?>
        </p>

</body>
</html><?php }
}
