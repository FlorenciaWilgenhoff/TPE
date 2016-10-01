<?php
require('config/ConfigApp.php');

require("controller/ControllerAnime.php");
require('controller/ControllerPagina.php');
require('controller/ControllerDescarga.php');
require('controller/ControllerStaff.php');
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
    case ConfigApp::$ACTION_MOSTRAR_ANIME:
    $anime = new ControllerAnime();
    $anime->mostrarAnime();
    break;
    case ConfigApp::$ACTION_GUARDAR_ANIMES:
    $controller->guardar();
    break;
    case ConfigApp::$ACTION_MOSTRAR_ADMIN:
    $controller->mostrarAdmin();
    break;
  case ConfigApp::$ACTION_ELIMINAR_ANIMES:
    $controller->eliminar();
    break;
   case ConfigApp::$ACTION_MOSTRAR_DESCARGAS:
  	$descarga = new ControllerDescarga();
    $descarga->mostrar();
    break;
	case ConfigApp::$ACTION_MOSTRAR_STAFF:
  	$staff = new ControllerStaff();
    $staff->mostrar();
    break;
  case ConfigApp::$ACTION_GUARDAR_STAFF:
  	$staff = new ControllerStaff();
    $staff->nuevoStaff();
    $staff->mostrar();
    break;
  default:
    $controller->mostrar();
    break;
}


?>
