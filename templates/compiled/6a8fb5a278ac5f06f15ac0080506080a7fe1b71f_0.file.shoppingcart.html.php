<?php
/* Smarty version 3.1.31, created on 2019-05-07 13:42:37
  from "D:\wamp64\www\webshop\templates\profile\shoppingcart.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5cd18b4d896970_49314198',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a8fb5a278ac5f06f15ac0080506080a7fe1b71f' => 
    array (
      0 => 'D:\\wamp64\\www\\webshop\\templates\\profile\\shoppingcart.html',
      1 => 1557236555,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cd18b4d896970_49314198 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="content-container" style="margin-top: 0px;">
    <div class="tile intro">
        <div class="intro-text">
            <div class="shopping-cart">
                <!-- Title -->
                <div class="title">
                    Shopping cart
                </div>
                <?php if (count($_smarty_tpl->tpl_vars['products']->value) !== 0) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'foo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->value) {
?>
                <div class="item">
                    <div class="buttons">
                        <form id="deleteForm<?php echo $_smarty_tpl->tpl_vars['foo']->value->pk_aankoop;?>
" method="post">
                            <input type="hidden" name="pk_aankoop" value="<?php echo $_smarty_tpl->tpl_vars['foo']->value->pk_aankoop;?>
">
                            <span class="delete-btn" onclick="document.getElementById('deleteForm<?php echo $_smarty_tpl->tpl_vars['foo']->value->pk_aankoop;?>
').submit();"></span>
                        </form>
                    </div>

                    <div class="image">
                        <img src="../images/<?php echo $_smarty_tpl->tpl_vars['foo']->value->img;?>
" alt="" />
                    </div>

                    <div class="description">
                        <span><?php echo $_smarty_tpl->tpl_vars['foo']->value->merk;?>
</span>
                        <span><?php echo $_smarty_tpl->tpl_vars['foo']->value->model;?>
</span>
                        <span>White</span>
                    </div>

                    <div class="quantity">
                        <button class="plus-btn" type="button" name="button">
                            <img src="../images/plus.svg" alt="" />
                        </button>
                        <input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['foo']->value->aantal;?>
">
                        <button class="minus-btn" type="button" name="button">
                            <img src="../images/minus.svg" alt="" />
                        </button>
                    </div>

                    <div class="total-price">€ <?php echo $_smarty_tpl->tpl_vars['foo']->value->prijs;?>
,-</div>
                </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                <?php } else { ?>
                <p>winkelwagen is leeg!</p>
                <?php }?>


            </div>
        </div>

        <div class="profile">

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
    $('.minus-btn').on('click', function(e) {
        e.preventDefault();
        var $this = $(this);
        var $input = $this.closest('div').find('input');
        var value = parseInt($input.val());

        if (value > 2) {
            value = value - 1;
        } else {
            value = 1;
        }

        $input.val(value);

    });

    $('.plus-btn').on('click', function(e) {
        e.preventDefault();
        var $this = $(this);
        var $input = $this.closest('div').find('input');
        var value = parseInt($input.val());

        if (value < 100) {
            value = value + 1;
        } else {
            value =100;
        }

        $input.val(value);
    });

    $('.like-btn').on('click', function() {
        $(this).toggleClass('is-active');
    });
<?php echo '</script'; ?>
>
<?php }
}
