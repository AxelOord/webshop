<?php
/* Smarty version 3.1.31, created on 2019-02-09 14:20:58
  from "D:\wamp64\www\webshop\templates\login\aanmelden.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c5ee1cacd8ea6_33287167',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1068953f8174c8f2ef7b03a06e2a537a5a86bc9e' => 
    array (
      0 => 'D:\\wamp64\\www\\webshop\\templates\\login\\aanmelden.html',
      1 => 1540529904,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c5ee1cacd8ea6_33287167 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <input name="naam" type="text" placeholder="name"/>
                    <input name="password" type="password" placeholder="password""/>
                    <input name="email" type="text" placeholder="email"/>
                    <div style="visibility:hidden"><span class="error">De Caps Lock (HOOFDLETTERS) staat aan!</span></div>
                    <input type="submit" name="register" class="btn" value="Create" />
                    <p class="message">Already registered? <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
inloggen">Sign In</a></p>
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
