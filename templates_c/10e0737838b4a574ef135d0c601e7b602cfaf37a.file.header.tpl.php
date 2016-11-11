<?php /* Smarty version Smarty-3.1.14, created on 2016-11-11 16:29:20
         compiled from ".\templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3053957f144c9482007-37375896%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10e0737838b4a574ef135d0c601e7b602cfaf37a' => 
    array (
      0 => '.\\templates\\header.tpl',
      1 => 1478878157,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3053957f144c9482007-37375896',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_57f144c9547ff3_37229255',
  'variables' => 
  array (
    'usuario' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f144c9547ff3_37229255')) {function content_57f144c9547ff3_37229255($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Series</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/one-page-wonder.css" rel="stylesheet">
 <!-- <link href="css/login.css" rel="stylesheet"> -->
</head>
<body>
  
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Ver menú</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a id="inicio">Inicio <span class="sr-only">(actual)</span></a></li>
          <li><a id="series">Series mas vistas <span class="sr-only">(actual)</span></a></li>
          <li><a id="descargas">Descargas <span class="sr-only">(actual)</span></a></li>
          <li><a id="staff">Unete a nuestro staff <span class="sr-only">(actual)</span></a></li>
          <li><a id="aSerie">A-Serie<span class="sr-only">(actual)</span></a></li>
          <li><a id="aCategoria">A-Categorias<span class="sr-only">(actual)</span></a></li>
          <li><a href="index.php?action=login"><span class="glyphicon glyphicon-user"> <?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>
</span></a></li>
        </ul>

        
        </div>
      </div>
    </div>
  </nav>
      <header class="header-image">
          <div class="headline">
            <div class="container">
            </div>
          </div>
        </header>
  

  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12" id="principal">
        <!-- <li><a id="inicio"> <span class="glyphicon glyphicon-home"></span></a></li>
          <li><a id="series"><span class="glyphicon glyphicon-eye-open"></span></a></li>
          <li><a id="descargas"><span class="glyphicon glyphicon-download-alt"></span></a></li>  --> 

    <div class="contenido">



<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>