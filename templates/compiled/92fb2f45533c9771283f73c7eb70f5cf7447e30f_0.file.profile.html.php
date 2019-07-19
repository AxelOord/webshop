<?php
/* Smarty version 3.1.31, created on 2019-04-25 09:34:28
  from "D:\wamp64\www\webshop\templates\profile\profile.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5cc17f2478fc20_39677254',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92fb2f45533c9771283f73c7eb70f5cf7447e30f' => 
    array (
      0 => 'D:\\wamp64\\www\\webshop\\templates\\profile\\profile.html',
      1 => 1556184865,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cc17f2478fc20_39677254 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="content-container" style="margin-top: 0px;">
    <div class="tile intro">
        <div class="intro-text">
            <h1>Welcome <?php echo $_smarty_tpl->tpl_vars['user_name']->value->naam;?>
</h1>
        </div>

        <div class="profile">
            <div class="shopping-cart icon">
                <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
profile/shoppingcart"><i class="fas fa-shopping-cart fa-7x"></i></a>
            </div>

            <div class="user-profile icon">
                <a href=""><i class="fas fa-user fa-7x"></i></a>
            </div>

            <div class="payment-methode icon">
                <a href=""><i class="fas fa-credit-card fa-7x"></i></a>
            </div>
        </div>
    </div>

    <div class="tile">
        <div class="intro-text">

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
