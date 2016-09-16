<?php
require('config/ConfigApp.php');

require("controller/ControllerAnime.php");
require('controller/ControllerPagina.php');


$controller = new ControllerPagina();

if (!array_key_exists(ConfigApp::$ACTION,$_REQUEST)){
  $controller->mostrar();
  die();
}

switch ($_REQUEST[ConfigApp::$ACTION]) {
  case ConfigApp::$ACTION_LISTAR_ANIMES:
  	$anime = new ControllerAnime();
    $anime->listar();
    break;

  default:
    $controller->mostrar();
    break;
}


?>