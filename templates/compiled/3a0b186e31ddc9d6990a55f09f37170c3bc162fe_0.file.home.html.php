<?php
/* Smarty version 3.1.31, created on 2018-06-28 13:37:25
  from "C:\wamp64\www\webshop\templates\home\home.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5b34e495062be7_98289258',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a0b186e31ddc9d6990a55f09f37170c3bc162fe' => 
    array (
      0 => 'C:\\wamp64\\www\\webshop\\templates\\home\\home.html',
      1 => 1530193042,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b34e495062be7_98289258 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="banner-container parallax">
    <!--<svg height="800" width="1200" align="right" style=" margin-left: auto; display:block;">
        <circle cx="850" cy="500" r="600" fill="red" opacity="0.5" />
        Sorry, your browser does not support inline SVG.
    </svg>-->
</div>

<div class="content-container">
    <div class="scroll-down-container">
        <div class="arrow">
            <i class="bt-down"></i>
        </div>
    </div>

    <div class="tile intro">
        <div class="intro-text">
            <h1>About Us</h1>
            <br>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam corporis expedita fugit nihil. Accusantium animi at earum laborum optio perspiciatis.</p>
        </div>

        <img src="<?php echo $_smarty_tpl->tpl_vars['img_url']->value;?>
about_white.png" alt="">
    </div>

    <div class="tile two">
        <div class="overlay">
            <div class="intro-text white" style="margin-top: 12%;">
                <h1>Production</h1>
                <br>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam corporis expedita fugit nihil. Accusantium animi at earum laborum optio perspiciatis.</p>
            </div>
        </div>
    </div>

    <div class="tile three">
        <div class="intro-text">
            <h1>Products</h1>
        </div>

        <div class="product_container">
            <div class="product">
                <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
products">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['img_url']->value;?>
duo_white.png" alt="">
                </a>
            </div>
        </div>
    </div>

    <div class="tile four">

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
                if ($(this).scrollTop() > 799) {
                    $('.header-nav--wrapper').fadeIn(500);
                    $('.scroll-down-container').fadeOut(500);
                } else {
                    $('.header-nav--wrapper').fadeOut(500);
                    $('.scroll-down-container').fadeIn(500);
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
                $(this).css('background-position', 'center ' + (( distanceFromBottom  ) * 0.5 - 90) +'px');
            } else {
                $(this).css('background-position', 'center ' + (( -scroll ) * 0.5 - 90) + 'px');
            }
        })
    }
<?php echo '</script'; ?>
>
<?php }
}
