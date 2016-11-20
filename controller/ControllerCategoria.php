<?php

require_once("model/ModelCategoria.php");
require_once("view/ViewCategoria.php");
require_once("controller/Controller.php");

class ControllerCategoria extends Controller{

  private $model;
  private $view;

  function __construct(){
    parent::__construct();
    $this->model = new ModelCategoria();
    $this->view = new ViewCategoria();
  }

  function assignCategorias(){
    $categorias = $this->model->getCategorias();
    $this->view->assignCategorias($categorias);
  }
  function listarCat(){
    $this->assignCategorias();
    $this->view->listar_categorias();
  }
  


  function mostrarAdmin(){
    $this->comprobarAdmin();
    $this->assignCategorias();
    $this->view->mostrar_admin();
  }
  
  function iniciar(){
    $this->assignCategorias();
    $this->view->mostrar();
  }
  
  function agregarCat(){
    $this->comprobarAdmin();
    if (isset($_POST["nombre"])){
      $categoria = $_POST["nombre"];
      $this->model->crearCat($categoria);
    }
    $this->mostrarAdmin();
  }

  
  function editarCat(){
    $this->comprobarAdmin();
    $id_categoria = $_GET["id_categoria"];
    if (isset($_POST["nombre"])){
      $categoriaEditada = $_POST["nombre"];
      $this->model->editarCat($categoriaEditada, $id_categoria);
    }
    $this->mostrarAdmin();
  }

  
  function eliminarCat(){
    $this->comprobarAdmin();
    $key = $_GET['id_categoria'];
    $this->model->eliminarCat($key);
    $this->mostrarAdmin();
  }
}

?>
