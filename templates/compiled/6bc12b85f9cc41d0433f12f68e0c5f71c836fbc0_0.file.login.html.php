<?php
/* Smarty version 3.1.31, created on 2018-09-18 08:53:50
  from "C:\wamp64\www\webshop\templates\login\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5ba0bd1e93fd93_68718644',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6bc12b85f9cc41d0433f12f68e0c5f71c836fbc0' => 
    array (
      0 => 'C:\\wamp64\\www\\webshop\\templates\\login\\login.html',
      1 => 1537260828,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ba0bd1e93fd93_68718644 (Smarty_Internal_Template $_smarty_tpl) {
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
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"><?php echo '</script'; ?>
>
    <title>Document</title>
</head>
<body>

<div class="homepage-wrapper--default">

    <div class="banner-container parallax" style="background-position: center 0px;">

        <div class="login-page">
            <div class="form">
                <form class="login-form" method="post" action="">
                    <div class="error"> <?php echo $_smarty_tpl->tpl_vars['errors']->value->login_incorrect;?>
</div>
                    <input <?php if ($_smarty_tpl->tpl_vars['errors']->value->email_leeg == 1) {?> style="border:2px solid red;"<?php }?> type="text" placeholder="username"name="email" />
                    <input <?php if ($_smarty_tpl->tpl_vars['errors']->value->wachtwoord_leeg == 1) {?> style="border:2px solid red;"<?php }?> type="password" placeholder="password" name="wachtwoord"  onkeypress="capLock(event)"/>
                    <div id="divMayus" style="visibility:hidden"><span class="error">De Caps Lock (HOOFDLETTERS) staat aan!</span></div>
                    <input type="submit" name="inloggen" class="btn" value="Login" />
                    <p class="message">Not registered? <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
inloggen/aanmelden">Create an account</a></p>
                </form>
            </div>
        </div>

    </div>

</div>



<?php echo '<script'; ?>
>
    function capLock(e){
        kc = e.keyCode?e.keyCode:e.which;
        sk = e.shiftKey?e.shiftKey:((kc == 16)?true:false);
        if(((kc >= 65 && kc <= 90) && !sk)||((kc >= 97 && kc <= 122) && sk))
            document.getElementById('divMayus').style.visibility = 'visible';
        else
            document.getElementById('divMayus').style.visibility = 'hidden';
    }
<?php echo '</script'; ?>
>



<?php echo '<script'; ?>
 type="text/javascript">
    //anylinkcssmenu.init("menu_anchors_class") //call this function at the very *end* of the document!
    anylinkcssmenu.init("anchorclass")
<?php echo '</script'; ?>
>


</body>
</html><?php }
}
