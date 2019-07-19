<?php
/* Smarty version 3.1.31, created on 2019-05-07 11:08:25
  from "D:\wamp64\www\webshop\templates\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5cd16729ba2f80_05071902',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4082c5b2a7ce598e9b4cfa89b2f01d376ebbea98' => 
    array (
      0 => 'D:\\wamp64\\www\\webshop\\templates\\index.html',
      1 => 1557227095,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cd16729ba2f80_05071902 (Smarty_Internal_Template $_smarty_tpl) {
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
<!--<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i class="fas fa-times"></i></a>
    <a href="#">About</a>
    <a href="#">Services</a>
    <a href="#">Clients</a>
    <a href="#">Contact</a>
</div>-->

    <div class="homepage-wrapper--default">

        <div class="header-nav--wrapper">

            <?php echo $_smarty_tpl->tpl_vars['main_menu']->value;?>


        </div>


        <div class="main-content">

            <?php echo $_smarty_tpl->tpl_vars['content']->value;?>


        </div>

    </div>


<!--<?php echo '<script'; ?>
 type="text/javascript">
    /* Set the width of the side navigation to 250px */
    function openNav() {
        document.getElementById("mySidenav").style.width = "300px";
    }

    /* Set the width of the side navigation to 0 */
    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }
<?php echo '</script'; ?>
>-->


</body>
</html><?php }
}
