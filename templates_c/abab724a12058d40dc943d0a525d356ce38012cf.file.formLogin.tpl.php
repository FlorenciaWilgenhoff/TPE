<?php /* Smarty version Smarty-3.1.14, created on 2016-11-23 20:16:15
         compiled from ".\templates\formLogin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:132005835eaff2ad175-12358400%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'abab724a12058d40dc943d0a525d356ce38012cf' => 
    array (
      0 => '.\\templates\\formLogin.tpl',
      1 => 1479848009,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '132005835eaff2ad175-12358400',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5835eaff30bee9_02001679',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5835eaff30bee9_02001679')) {function content_5835eaff30bee9_02001679($_smarty_tpl) {?><!DOCTYPE html>
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
          <h2>Registrarse</h2>
          
        </div>
      </div>

      <div class="panel panel-filled">
        <div class="panel-body">
          <form method="post" action="registrarse">

             <div class="form-group">
             <label class="control-label" for="name">Nombre</label>
              <input type="text" name="nombre" id="inputNombre" class="form-control" placeholder="Ingrese un nombre" required autofocus>
            </div>

            <div class="form-group">
             <label class="control-label" for="username">Email</label>
              <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Ingrese su email" required autofocus>
            </div>

            <div class="form-group">
              <label class="control-label" for="password">Contraseña</label>
                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Ingrese contraseña" required>
            </div>
           
            <div>
               <button type="submit"class="btn btn-lg btn-primary btn-block btn-signin">Registrarme</button> 
            </div>
          </form>
      </div>
    </div>
    <a href="index.php" class="btn btn-accent">Volver a inicio</a>
  </section>

 <?php }} ?>