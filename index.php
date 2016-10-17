<?php
require('config/ConfigApp.php');

require("controller/ControllerAnime.php");
require("controller/ControllerCategoria.php");
require('controller/ControllerPagina.php');
require('controller/ControllerDescarga.php');
require('controller/ControllerStaff.php');
$controller = new ControllerPagina();
$controllerAnime = new ControllerAnime();
$controllerCategoria = new ControllerCategoria();
if (!array_key_exists(ConfigApp::$ACTION,$_REQUEST)){
  $controller->mostrar();
  die();
}

switch ($_REQUEST[ConfigApp::$ACTION]) {
  case ConfigApp::$ACTION_LISTAR_ANIMES:

    $controllerAnime->listar();
    break;
    case ConfigApp::$ACTION_MOSTRAR_ANIME:
     $controllerAnime->mostrarAnime();
    break;
    case ConfigApp::$ACTION_GUARDAR_ANIMES:
    $controller->guardar();
    break;
    case ConfigApp::$ACTION_ADMIN_ANIME:
    $controllerAnime->mostrarAdmin();
    break;
    case ConfigApp::$ACTION_ADMIN_CATEGORIA:
    $controllerCategoria->mostrarAdmin();
    break;
    case ConfigApp::$ACTION_AGREGAR_ANIME:
    $controllerAnime->agregar();
    break;
     case ConfigApp::$ACTION_EDITAR_ANIMES:
    $controllerAnime->editar();
    break;
    case ConfigApp::$ACTION_ELIMINAR_ANIMES:
    $controllerAnime->eliminar();
    break;
    case ConfigApp::$ACTION_LISTAR_CATEGORIAS:
    $controllerCategoria->listarCat();
    break;
    case ConfigApp::$ACTION_MOSTRAR_CATEGORIA:
     $controllerCategoria->mostrarCategoria();
    break;
    case ConfigApp::$ACTION_AGREGAR_CATEGORIA:
     $controllerCategoria->agregarCat();
    break;
    case ConfigApp::$ACTION_EDITAR_CATEGORIAS:
     $controllerCategoria->editarCat();
    break;
     case ConfigApp::$ACTION_ELIMINAR_CATEGORIAS:
     $controllerCategoria->eliminarCat();
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
    break;
    case ConfigApp::$ACTION_HOME:
    $controller->mostrarHome();
    break;
  default:
    $controller->mostrar();
    break;
}


?>
