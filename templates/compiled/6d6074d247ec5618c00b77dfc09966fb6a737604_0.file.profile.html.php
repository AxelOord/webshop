<?php
/* Smarty version 3.1.31, created on 2018-03-15 09:59:03
  from "C:\wamp64\www\webshop\templates\profile\profile.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5aaa43e74c1a17_88893703',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d6074d247ec5618c00b77dfc09966fb6a737604' => 
    array (
      0 => 'C:\\wamp64\\www\\webshop\\templates\\profile\\profile.html',
      1 => 1521107940,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aaa43e74c1a17_88893703 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="content-container" style="margin-top: 0px;">
    <div class="tile intro">
        <div class="intro-text">
            <h1>Welcome <?php echo $_smarty_tpl->tpl_vars['user_name']->value->naam;?>
</h1>
        </div>
        <div class="profile">
            <div class="shopping-cart icon">
                <a href=""><i class="fas fa-shopping-cart fa-7x"></i></a>
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
