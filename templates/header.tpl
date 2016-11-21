<!DOCTYPE html>
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
          <li><a id="aUsuario">A-Usuario<span class="sr-only">(actual)</span></a></li>
          <li><a href="index.php?action=login"><span class="glyphicon glyphicon-user">
           {if isset($usuario)}{$usuario}{/if}</span></a></li>
           <li><a href="index.php?action=logout"><span class="glyphicon glyphicon-remove">
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



{include file='footer.tpl'}
