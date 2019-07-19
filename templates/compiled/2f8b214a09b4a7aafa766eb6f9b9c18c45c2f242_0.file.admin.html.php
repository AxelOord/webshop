<?php
/* Smarty version 3.1.31, created on 2019-05-02 14:01:51
  from "D:\wamp64\www\webshop\templates\admin\admin.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5ccaf84f842360_62374408',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f8b214a09b4a7aafa766eb6f9b9c18c45c2f242' => 
    array (
      0 => 'D:\\wamp64\\www\\webshop\\templates\\admin\\admin.html',
      1 => 1556805707,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ccaf84f842360_62374408 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="admin-page">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'foo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->value) {
?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/edit/<?php echo $_smarty_tpl->tpl_vars['foo']->value->pk_product;?>
"><?php echo $_smarty_tpl->tpl_vars['foo']->value->merk;?>
 <?php echo $_smarty_tpl->tpl_vars['foo']->value->model;?>
</a>
    <br>
    <br>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

</div><?php }
}
