<?php /* Smarty version Smarty-3.1.14, created on 2016-11-23 19:41:57
         compiled from ".\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10475835e2f54744d5-16953515%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0390f83576cc40b989c12a7362afcba143967e43' => 
    array (
      0 => '.\\templates\\login.tpl',
      1 => 1479848258,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10475835e2f54744d5-16953515',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5835e2f5512a50_41052998',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5835e2f5512a50_41052998')) {function content_5835e2f5512a50_41052998($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <title>Series</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link href="css/one-page-wonder.css" rel="stylesheet">

</head>
<body class="blank  pace-done">

  <section class="content">
    <div class="back-link">
    
    </div>

    <div class="container-center">

      <div class="view-header">
        <div class="header-icon">
          <i class="pe page-header-icon pe-7s-unlock"></i>
        </div>
        <div class="header-title">
          <h2>Ingrese a su cuenta</h2>
          
        </div>
      </div>

      <div class="panel panel-filled">
        <div class="panel-body">
          <form method="post" action="login">

            <div class="form-group">
             <label class="control-label" for="username">Email</label>
             <input type="email" name="txtUser" id="inputEmail" class="form-control" placeholder="Ingrese su Email" required autofocus>
            </div>

            <div class="form-group">
              <label class="control-label" for="password">Contraseña</label>
              <input type="password" name="txtPass"id="inputPassword" class="form-control" placeholder="Ingrese su contraseña" required>
            </div>
            
            <div>
               <button type="submit"class="btn btn-lg btn-primary btn-block btn-signin">Entrar</button> 
               <a href="index.php?action=registrarse" class="btn btn-default registrarme">Registrarme</a>
            </div>
            
          </form>
      </div>
    </div>
    <a href="index.php" class="btn btn-accent">Volver a inicio</a>
  </section>
 <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

  <?php }} ?>