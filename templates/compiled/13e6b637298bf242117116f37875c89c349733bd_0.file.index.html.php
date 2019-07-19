<?php
/* Smarty version 3.1.31, created on 2018-03-15 09:27:24
  from "C:\wamp64\www\webshop\templates\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5aaa3c7cae6968_30456476',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13e6b637298bf242117116f37875c89c349733bd' => 
    array (
      0 => 'C:\\wamp64\\www\\webshop\\templates\\index.html',
      1 => 1521106022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aaa3c7cae6968_30456476 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['css_url']->value;?>
style.css">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,300,400" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['css_url']->value;?>
fontawesome-all.css">
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"><?php echo '</script'; ?>
>
    <title>Document</title>
</head>
<body>

    <div class="homepage-wrapper--default">

        <div class="header-nav--wrapper">

            <?php echo $_smarty_tpl->tpl_vars['main_menu']->value;?>


        </div>


        <div class="main-content">

            <?php echo $_smarty_tpl->tpl_vars['content']->value;?>


        </div>


    </div>

</body>
</html><?php }
}
