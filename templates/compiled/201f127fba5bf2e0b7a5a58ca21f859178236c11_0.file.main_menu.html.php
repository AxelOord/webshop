<?php
/* Smarty version 3.1.31, created on 2019-03-14 10:00:31
  from "D:\wamp64\www\webshop\templates\main_menu.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c8a263f14e188_44991172',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '201f127fba5bf2e0b7a5a58ca21f859178236c11' => 
    array (
      0 => 'D:\\wamp64\\www\\webshop\\templates\\main_menu.html',
      1 => 1552557626,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c8a263f14e188_44991172 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="header-nav--div">
    <ul class="header-nav--list">
        <li class="header-nav--list_item"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
">Home</a></li>
        <li class="header-nav--list_item"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
products">Products</a></li>
        <li class="header-nav--list_item"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
contact">Contact</a></li>
        <?php if (isset($_smarty_tpl->tpl_vars['admin']->value)) {?>
        <li class="header-nav--list_item"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin">Admin</a></li>
        <?php }?>
    </ul>

    <ul class="header-nav--login-list">
        <?php if ($_smarty_tpl->tpl_vars['is_loggedin']->value) {?>
            <?php ob_start();
echo $_smarty_tpl->tpl_vars['url']->value[0];
$_prefixVariable1=ob_get_clean();
if ($_prefixVariable1 == 'profile') {?>
                <li class="header-nav--list_item header-nav--list_login"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
uitloggen"><i class="fas fa-sign-out-alt"></i> logout</a></li>
            <?php } else { ?>
                <li class="header-nav--list_item header-nav--list_login"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
profile"><i class="fas fa-user"></i> Profile</a></li>
            <?php }?>
        <?php } else { ?>
            <li class="header-nav--list_item header-nav--list_login"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
inloggen"><i class="fas fa-sign-in-alt"></i> Login</a></li>
        <?php }?>
    </ul>
</div>
<?php }
}
