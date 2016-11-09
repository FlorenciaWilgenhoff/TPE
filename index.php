<?php
require('config/ConfigApp.php');
require("controller/ControllerSerie.php");
require("controller/ControllerCategoria.php");
require('controller/ControllerPagina.php');
require('controller/ControllerStaff.php');
require('controller/ControllerLogin.php');

$controller = new ControllerPagina();
$controllerSerie = new ControllerSerie();
$controllerCategoria = new ControllerCategoria();
$controllerLogin = new ControllerLogin();

if (!array_key_exists(ConfigApp::$ACTION,$_REQUEST)){
  $controller->mostrar();
  die();
}

switch ($_REQUEST[ConfigApp::$ACTION]) {
  case ConfigApp::$ACTION_LISTAR_SERIES:

    $controllerSerie->listar();
    break;
    case ConfigApp::$ACTION_MOSTRAR_SERIE:
     $controllerSerie->mostrarSerie();
    break;
    case ConfigApp::$ACTION_GUARDAR_SERIES:
    $controller->guardar();
    break;
    case ConfigApp::$ACTION_ADMIN_SERIE:
    $controllerSerie->mostrarAdmin();
    break;
    case ConfigApp::$ACTION_ADMIN_CATEGORIA:
    $controllerCategoria->mostrarAdmin();
    break;
    case ConfigApp::$ACTION_AGREGAR_SERIE:
    $controllerSerie->agregar();
    break;
     case ConfigApp::$ACTION_EDITAR_SERIES:
    $controllerSerie->editar();
    break;
    case ConfigApp::$ACTION_ELIMINAR_SERIES:
    $controllerSerie->eliminar();
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
      $controller->mostrarDescargas();
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
    case ConfigApp::$ACTION_LOGIN:
    $controllerLogin->login();
    break;
    case ConfigApp::$ACTION_LOGOUT:
    $controllerLogin->logout();
    break;
    case ConfigApp::$ACTION_FILTRAR_CATEGORIA:
    $controllerSerie->filtroCat();
    break;
    default:
    $controller = ($controllerLogin); //VER SI ESTO ESTA BIEN
    
    $controller->iniciar();
    default:
      $controller->mostrar();
      break;
}


?>
