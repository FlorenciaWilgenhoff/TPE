<?php /* Smarty version Smarty-3.1.14, created on 2016-11-11 16:43:14
         compiled from ".\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15043581f84f3d9db57-72605945%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0390f83576cc40b989c12a7362afcba143967e43' => 
    array (
      0 => '.\\templates\\login.tpl',
      1 => 1478878989,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15043581f84f3d9db57-72605945',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_581f84f3e047d7_80647558',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_581f84f3e047d7_80647558')) {function content_581f84f3e047d7_80647558($_smarty_tpl) {?><div class="container">
        <div class="card card-container">
            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form method="POST"  class="form-signin">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="email" name="txtUser" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                <input type="password" name="txtPass"id="inputPassword" class="form-control" placeholder="Password" required>
                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
            </form><!-- /form -->
            <a href="#" class="forgot-password">
                Forgot the password?
            </a>
        </div><!-- /card-container -->
    </div><!-- /container --><?php }} ?>