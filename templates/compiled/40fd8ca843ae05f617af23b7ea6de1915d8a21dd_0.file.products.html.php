<?php
/* Smarty version 3.1.31, created on 2019-03-21 22:32:25
  from "D:\wamp64\www\webshop\templates\products\products.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c9410f9ac30a0_81134968',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40fd8ca843ae05f617af23b7ea6de1915d8a21dd' => 
    array (
      0 => 'D:\\wamp64\\www\\webshop\\templates\\products\\products.html',
      1 => 1553207512,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c9410f9ac30a0_81134968 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="content-container" style="margin-top: 0px;">

    <div class="tile one">
        <div class="intro-text tile-product">
            <section class="products">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_slice($_smarty_tpl->tpl_vars['products']->value,0,10), 'foo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->value) {
?>
                <div class="product-card">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
products/item/<?php echo $_smarty_tpl->tpl_vars['foo']->value->pk_product;?>
">
                        <?php if ($_smarty_tpl->tpl_vars['foo']->value->discount == 1) {?>
                        <div class="cr cr-top cr-left cr-sticky cr-red">Sale!</div>
                        <?php } else { ?>
                        <div class="cr cr-top cr-left cr-sticky cr-transparant">.</div>
                        <?php }?>
                        <div class="product-image">
                            <img src="images/<?php echo $_smarty_tpl->tpl_vars['foo']->value->img;?>
">
                        </div>
                        <div class="product-info">
                            <h5><?php echo $_smarty_tpl->tpl_vars['foo']->value->merk;?>
<br /><?php echo $_smarty_tpl->tpl_vars['foo']->value->model;?>
</h5>
                            <?php if ($_smarty_tpl->tpl_vars['foo']->value->discount == 1) {?>
                            <h6><span style="text-decoration: line-through;">€ <?php echo $_smarty_tpl->tpl_vars['foo']->value->prijs;?>
,-</span><br />€ <?php echo $_smarty_tpl->tpl_vars['foo']->value->korting;?>
,-</h6>
                            <?php } else { ?>
                            <h6>€ <?php echo $_smarty_tpl->tpl_vars['foo']->value->prijs;?>
,-</h6>
                            <?php }?>
                        </div>
                    </a>
                </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

            </section>

            <section class="products">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['highlight']->value, 'foo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->value) {
?>
                <div class="product-card">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
products/item/<?php echo $_smarty_tpl->tpl_vars['foo']->value->pk_product;?>
">
                        <?php if ($_smarty_tpl->tpl_vars['foo']->value->discount == 1) {?>
                        <div class="cr cr-top cr-left cr-sticky cr-red">Sale!</div>
                        <?php } else { ?>
                        <div class="cr cr-top cr-left cr-sticky cr-transparant">.</div>
                        <?php }?>
                        <div class="product-image">
                            <img class="highlight"src="images/<?php echo $_smarty_tpl->tpl_vars['foo']->value->img;?>
">
                        </div>
                        <div class="product-info">
                            <h5><?php echo $_smarty_tpl->tpl_vars['foo']->value->merk;?>
<br /><?php echo $_smarty_tpl->tpl_vars['foo']->value->model;?>
</h5>
                            <?php if ($_smarty_tpl->tpl_vars['foo']->value->discount == 1) {?>
                            <h6><span style="text-decoration: line-through;">€ <?php echo $_smarty_tpl->tpl_vars['foo']->value->prijs;?>
,-</span><br />€ <?php echo $_smarty_tpl->tpl_vars['foo']->value->korting;?>
,-</h6>
                            <?php } else { ?>
                            <h6>€ <?php echo $_smarty_tpl->tpl_vars['foo']->value->prijs;?>
,-</h6>
                            <?php }?>
                        </div>
                    </a>
                </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

            </section>

            <section class="products">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_slice($_smarty_tpl->tpl_vars['products']->value,10,99), 'foo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->value) {
?>
                <div class="product-card">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
products/item/<?php echo $_smarty_tpl->tpl_vars['foo']->value->pk_product;?>
">
                        <?php if ($_smarty_tpl->tpl_vars['foo']->value->discount == 1) {?>
                        <div class="cr cr-top cr-left cr-sticky cr-red">Sale!</div>
                        <?php } else { ?>
                        <div class="cr cr-top cr-left cr-sticky cr-transparant">.</div>
                        <?php }?>
                        <div class="product-image">
                            <img src="images/<?php echo $_smarty_tpl->tpl_vars['foo']->value->img;?>
">
                        </div>
                        <div class="product-info">
                            <h5><?php echo $_smarty_tpl->tpl_vars['foo']->value->merk;?>
<br /><?php echo $_smarty_tpl->tpl_vars['foo']->value->model;?>
</h5>
                            <?php if ($_smarty_tpl->tpl_vars['foo']->value->discount == 1) {?>
                            <h6><span style="text-decoration: line-through;">€ <?php echo $_smarty_tpl->tpl_vars['foo']->value->prijs;?>
,-</span><br />€ <?php echo $_smarty_tpl->tpl_vars['foo']->value->korting;?>
,-</h6>
                            <?php } else { ?>
                            <h6>€ <?php echo $_smarty_tpl->tpl_vars['foo']->value->prijs;?>
,-</h6>
                            <?php }?>
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
