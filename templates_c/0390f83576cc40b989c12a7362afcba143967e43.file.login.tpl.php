<?php /* Smarty version Smarty-3.1.14, created on 2016-11-18 15:31:01
         compiled from ".\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:266582f10a54b7405-93426583%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0390f83576cc40b989c12a7362afcba143967e43' => 
    array (
      0 => '.\\templates\\login.tpl',
      1 => 1479251803,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '266582f10a54b7405-93426583',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_582f10a55a6b94_70963124',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582f10a55a6b94_70963124')) {function content_582f10a55a6b94_70963124($_smarty_tpl) {?><div class="container">
        <div class="card card-container">
            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form method="POST"  class="form-signin">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="email" name="txtUser" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                <input type="password" name="txtPass"id="inputPassword" class="form-control" placeholder="Password" required>
                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Recuerdame
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Entrar</button>  <!--VER SI ESO ESTA BIEN , que cuando haga click en registrarme me mande al formulario-->
                 <a href="index.php?action=registrarse" class="registrarme">Registrarme</a>
            </form><!-- /form -->
            <a href="#" class="forgot-password">
                Olvido su contraseña?
            </a>
        </div><!-- /card-container -->
    </div><!-- /container --><?php }} ?>