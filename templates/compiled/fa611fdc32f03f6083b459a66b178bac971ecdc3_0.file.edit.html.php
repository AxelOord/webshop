<?php
/* Smarty version 3.1.31, created on 2019-05-05 12:41:39
  from "D:\wamp64\www\webshop\templates\admin\edit.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5cceda030d85b0_37811713',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa611fdc32f03f6083b459a66b178bac971ecdc3' => 
    array (
      0 => 'D:\\wamp64\\www\\webshop\\templates\\admin\\edit.html',
      1 => 1557060096,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cceda030d85b0_37811713 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="tile intro">
    <div class="admin-intro-text">
        <form method="post">
            <input type="hidden" name="pk_product" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->pk_product;?>
">
            <div class="block">
                <label for="">merk:</label>
                <input class="edit-input" type="text" name="merk" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->merk;?>
"><br>
            </div>
            <br>
            <div class="block">
                <label for="">model:</label>
                <input class="edit-input" type="text" name="model" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->model;?>
"><br>
            </div>
            <br>
            <div class="block">
                <label for="">prijs:</label>
                <input class="edit-input" type="text" name="prijs" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->prijs;?>
"><br>
            </div>
            <br>
            <div class="block">
                <label for="">aantal:</label>
                <input class="edit-input" type="text" name="aantal" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->aantal;?>
"><br>
            </div>
            <br>
            <div class="block">
                <label for="">beschrijving:</label>
                <input class="edit-input" type="text" name="beschrijving" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->beschrijving;?>
">
            </div>
            <br>
            <br>
            <div class="block">
                <label for="">korting prijs:</label>
                <input class="edit-input" type="text" name="korting" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->korting;?>
">
            </div>
            <br>
            <br>
            <div class="block">
                <label for="">in de korting:</label>
                <input type="hidden" name="discount" value="0" />
                <input class="edit-input" type="checkbox" name="discount" value="1" <?php if ($_smarty_tpl->tpl_vars['product']->value->discount == 1) {?>checked<?php }?>>
            </div>
            <br> <br>
            <input type="submit" name="opslaan" value="opslaan">
            <input type="submit" name="delete" value="verwijderen">
        </form>
        <br>
    </div>
    <br>
</div>

<?php }
}
