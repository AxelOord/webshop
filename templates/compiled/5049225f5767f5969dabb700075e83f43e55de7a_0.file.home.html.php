<?php
/* Smarty version 3.1.31, created on 2019-03-28 12:10:56
  from "D:\wamp64\www\webshop\templates\home\home.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c9cb9d08fe094_42112139',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5049225f5767f5969dabb700075e83f43e55de7a' => 
    array (
      0 => 'D:\\wamp64\\www\\webshop\\templates\\home\\home.html',
      1 => 1553775054,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c9cb9d08fe094_42112139 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="banner-container parallax">
    <div class="text-intro">
        <h1>Only for everyone</h1>
        <p>A retro attitude mixed with a timeless design. The Continental 80 is in store now.</p>
    </div>
</div>

<div class="content-container">
    <div class="scroll-down-container">
        <div class="arrow">
            <i class="bt-down"></i>
        </div>
    </div>

    <div class="tile intro">
        <div class="intro-text">
            <h2>About Us</h2>
            <br>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam corporis expedita fugit nihil. Accusantium animi at earum laborum optio perspiciatis.</p>
        </div>
    </div>

    <div class="tile two">
        <div class="overlay">
            <div class="intro-text white" style="margin-top: 12%;">
                <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
products" class="btn btn--white btn--animated"> Go to shop </a>
            </div>
        </div>
    </div>

    <div class="tile three">
        <div class="intro-text margin-bottom-25">
            <h2>Discounted</h2>
        </div>

        <div class="product_container">
            <div class="product">
                <section class="products">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'foo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->value) {
?>
                        <div class="product-card">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
products/item/<?php echo $_smarty_tpl->tpl_vars['foo']->value->pk_product;?>
">
                                <div class="cr cr-top cr-left cr-sticky cr-red">Sale!</div>
                                <div class="product-image">
                                    <img src="images/<?php echo $_smarty_tpl->tpl_vars['foo']->value->img;?>
">
                                </div>
                                <div class="product-info">
                                    <h5><?php echo $_smarty_tpl->tpl_vars['foo']->value->merk;?>
 <?php echo $_smarty_tpl->tpl_vars['foo']->value->model;?>
</h5>
                                    <h6><span style="text-decoration: line-through;">€ <?php echo $_smarty_tpl->tpl_vars['foo']->value->prijs;?>
,-</span><br />€ <?php echo $_smarty_tpl->tpl_vars['foo']->value->korting;?>
,-</h6>
                                </div>
                            </a>
                        </div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>


                </section>
            </div>
        </div>
    </div>

</div>


<?php echo '<script'; ?>
 type="text/javascript">
    $(".arrow").click(function() {
        $('html,body').animate({
                scrollTop: $(".content-container").offset().top},
            'slow');
    });

    (function($) {
        $(document).ready(function(){
            $(window).scroll(function(){
                if ($(this).scrollTop() > 444) {
                    $(".header-nav--wrapper").css('background-color', 'white');
                } else {
                    $(".header-nav--wrapper").css('background-color', 'transparent');
                }
            });
        });
    })(jQuery);

    $(window).scroll(function(e) {
        parallax();
    })


    function parallax() {
        var scroll = $(window).scrollTop();
        var screenHeight = $(window).height();

        $('.parallax').each(function() {
            var offset = $(this).offset().top;
            var distanceFromBottom = offset - scroll - screenHeight

            if (offset > screenHeight && offset) {
                $(this).css('background-position', '-120 ' + (( distanceFromBottom  ) * 0.5 - 90) +'px');
            } else {
                $(this).css('background-position', '-120 ' + (( -scroll ) * 0.5 - 90) + 'px');
            }
        })
    }
<?php echo '</script'; ?>
>
<?php }
}
