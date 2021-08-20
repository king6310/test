<?php
/* Smarty version 3.1.29, created on 2016-12-08 15:26:13
  from "D:\WWW\smarty3\temp\09.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58490b15e77f56_80014529',
  'file_dependency' => 
  array (
    '64478a1a672a4ccd2c0e65addb5c5aadf209343c' => 
    array (
      0 => 'D:\\WWW\\smarty3\\temp\\09.html',
      1 => 1481181972,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58490b15e77f56_80014529 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>刘备</title>
</head>
<body>
    <p>
        <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['end']->value+1 - ($_smarty_tpl->tpl_vars['start']->value) : $_smarty_tpl->tpl_vars['start']->value-($_smarty_tpl->tpl_vars['end']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['start']->value, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
            <?php echo $_smarty_tpl->tpl_vars['i']->value;?>
&nbsp;
            <?php if ($_smarty_tpl->tpl_vars['i']->value%3 == 0) {?>
                <br/>
            <?php }?>
        <?php }
}
?>

    </p>
    <p>
        <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 2;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 100+1 - ($_smarty_tpl->tpl_vars['start']->value) : $_smarty_tpl->tpl_vars['start']->value-(100)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['start']->value, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
            <?php if ($_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->first) {?>第一次循环数是：<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
<br/><?php }?>
            <?php echo $_smarty_tpl->tpl_vars['i']->value;?>
&nbsp;
            <?php if ($_smarty_tpl->tpl_vars['i']->iteration%3 == 0) {?><br/><?php }?>
            <?php if ($_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->last) {?><br/>最后一次循环数是：<?php echo $_smarty_tpl->tpl_vars['i']->value;
}?>
        <?php }
}
?>

        <br>
        本次循环的总次数：<?php echo $_smarty_tpl->tpl_vars['i']->total;?>

    </p>
</body>
</html><?php }
}
