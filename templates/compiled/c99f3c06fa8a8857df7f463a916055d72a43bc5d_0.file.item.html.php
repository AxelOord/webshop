<?php
/* Smarty version 3.1.31, created on 2019-05-08 10:45:29
  from "D:\wamp64\www\webshop\templates\products\item.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5cd2b3493108e7_02700701',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c99f3c06fa8a8857df7f463a916055d72a43bc5d' => 
    array (
      0 => 'D:\\wamp64\\www\\webshop\\templates\\products\\item.html',
      1 => 1557312325,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cd2b3493108e7_02700701 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once 'D:\\wamp64\\www\\webshop\\system\\libraries\\Smarty\\libs\\plugins\\modifier.replace.php';
?>
<div class="item-spacer">

</div>

<div class="item-list">

    <div class="item-center">
        <div class="h-container">
            <div class="h-parent-container">
                <div class="block-container padding-item">
                    <div class="fluid">
                        <img src="../../images/<?php echo $_smarty_tpl->tpl_vars['product']->value->img;?>
" alt="" class="h-image-img">
                    </div>
                </div>

                <div class="block-container padding-item">
                    <div class="hi-container">
                        <div class="hi-action">
                            <a title="Nike Sportswear" as="button" href="/nike-sportswear/" class="h-action h-m-top-s h-m-bottom-xl -link">
                                <span class="h-text h-color-black body -text-only">
                                    <picture>
                                        <img class="h-image-img brand" src="../../images/<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['product']->value->merk,' ','');?>
.png">
                                    </picture>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="h-m-bottom-m">
                        <a title="Nike Sportswear" as="button" href="/nike-sportswear/" class="h-action default" type="button">
                            <h2 as="h2" class="h-text h-color-black detail h-p-bottom-xs h-bold" style="display: inline;"><?php echo $_smarty_tpl->tpl_vars['product']->value->merk;?>
 </h2>
                            <span class="h-text h-color-black body" style="display: inline;">
                                <svg class="h-decor-svg" focusable="false" viewBox="0 0 24 24" width="1em" height="1em" fill="currentColor" style="margin-bottom: -0.2em;">
                                    <path d="M17.437 12.207L9.165 4l-1.16 1.17 7.101 7.048L8 19.38l1.17 1.16z">

                                    </path>
                                </svg>
                            </span>
                        </a>
                    </div>

                    <div class="h-m-bottom-m">
                        <h1 as="h1" title="AIR FORCE 1 - Sneakers laag " class="h-text h-color-black title-typo h-clamp-2"><?php echo $_smarty_tpl->tpl_vars['product']->value->model;?>
 </h1>
                    </div>

                    <div class="h-container h-m-top-s h-align-left">
                        <span class="h-text h-color-black detail">Kleur: </span>
                        <span class="h-text h-color-black detail title-4">white</span>
                    </div>
                </div>

                <div class="h-product-price h-m-bottom-xl topSection margin">
                    <div class="h-text h-color-black title-typo h-p-top-m">€&nbsp;<?php echo $_smarty_tpl->tpl_vars['product']->value->prijs;?>

                        <span as="span" class="h-text h-color-dark-grey detail h-p-left-s h-normal-weight">inclusief btw</span>
                    </div>
                </div>

                <form id="aankoopform" method="post">
                    <input type="hidden" name="aankoop" value="aankoop">
                </form>
                <div class="h-container h-p-left-m h-flex-equal-size h-align-left button-zalan" onclick="document.getElementById('aankoopform').submit();">
                    <button id="z-pdp-topSection-addToCartButton" as="button" class="h-action primary -button default" type="button">
                        <div class="h-container h-align-left">
                            <div class="h-container h-action-container -default h-align-left">
                                <span as="span" class="h-icon h-icon- h-color-black h-action-icon">
                                </span><span class="h-text h-color-black button h-action-text">Bestel nu!</span>
                            </div>
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </div>

</div><?php }
}
