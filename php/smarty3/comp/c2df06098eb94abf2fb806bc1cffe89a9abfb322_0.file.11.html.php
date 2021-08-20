<?php
/* Smarty version 3.1.29, created on 2016-05-21 23:30:33
  from "D:\WWW\smarty3\temp\11.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57407f191a6a11_32182859',
  'file_dependency' => 
  array (
    'c2df06098eb94abf2fb806bc1cffe89a9abfb322' => 
    array (
      0 => 'D:\\WWW\\smarty3\\temp\\11.html',
      1 => 1463844631,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57407f191a6a11_32182859 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Title</title>
</head>
<body>
    
        <h2>section</h2>
        一般section这么写{section name = g loop = $source}
        loop是待循环的数组
        name = g,代表每一次循环，g=0 1 2 3...
        如果数组也是标签的索引数组，g恰好就是数组的每一个键
        因此，手册上说section用于循环从0开始的索引数组
    
    <h2>布尔商城商品列表</h2>
    <table  width="40%" border="1" cellspacing="0" cellpadding="0">
        <tr>
            <td>序号</td><td>商品名</td><td>商品价格</td>
        </tr>
        <?php
$__section_g_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_g']) ? $_smarty_tpl->tpl_vars['__smarty_section_g'] : false;
$__section_g_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['goods']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_g_0_total = $__section_g_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_g'] = new Smarty_Variable(array());
if ($__section_g_0_total != 0) {
for ($__section_g_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_g']->value['index'] = 0; $__section_g_0_iteration <= $__section_g_0_total; $__section_g_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_g']->value['index']++){
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['goods']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_g']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_g']->value['index'] : null)]['list_id'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['goods']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_g']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_g']->value['index'] : null)]['tilte'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['goods']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_g']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_g']->value['index'] : null)]['nid'];?>
</td>
        </tr>
        <?php
}
}
if ($__section_g_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_g'] = $__section_g_0_saved;
}
?>
    </table>
    <?php
while ($_smarty_tpl->tpl_vars['age']->value > 0) {?>
    <?php echo $_smarty_tpl->tpl_vars['age']->value--;?>
岁，未成年。<br />
    <?php }?>

    <HR />
    <?php
while ($_smarty_tpl->tpl_vars['age']->value < 18) {?>
        <?php echo $_smarty_tpl->tpl_vars['age']->value++;?>
岁，未成年。<br />
    <?php }?>

</body>
</html><?php }
}
