<?php
/* Smarty version 3.1.31, created on 2018-06-28 13:39:52
  from "C:\wamp64\www\webshop\templates\products\products.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5b34e528a4b264_61978338',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb1dfd5a6a21d1c60e11da88398bd7595bd8aec0' => 
    array (
      0 => 'C:\\wamp64\\www\\webshop\\templates\\products\\products.html',
      1 => 1530193133,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b34e528a4b264_61978338 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="content-container" style="margin-top: 0px;">
    <div class="tile intro">
        <div class="intro-text">

        </div>
        <div class="profile">

        </div>
    </div>

    <div class="tile">
        <div class="intro-text">
            <p><?php echo $_smarty_tpl->tpl_vars['product1']->value;?>
</p>
            <p><?php echo $_smarty_tpl->tpl_vars['product2']->value;?>
</p>
            <p><?php echo $_smarty_tpl->tpl_vars['product3']->value;?>
</p>
        </div>
    </div>

    <div class="tile three">
        <div class="intro-text">

        </div>
    </div>

    <div class="tile four">

    </div>
</div>


<?php echo '<script'; ?>
 type="text/javascript">
    (function($) {
        $(document).ready(function(){
            $('.header-nav--wrapper').fadeIn(500);
        });
    })(jQuery);
<?php echo '</script'; ?>
>
<?php }
}
