<?php

require_once("model/ModelCategoria.php");
require_once("view/ViewCategoria.php");

class ControllerCategoria {

  private $model;
  private $view;

  function __construct(){
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
  //mostrar admin
  function mostrarAdmin(){
    $this->assignCategorias();
    $this->view->mostrar_admin();
  }
  //iniciar
  function iniciar(){
    $this->assignCategorias();
    $this->view->mostrar();
  }
  //agregar categoria
  function agregarCat(){
    if (isset($_POST["nombre"])){
      $categoria["nombre"] = $_POST["nombre"];
      $this->model->crearCat($categoria);
    }
    $this->mostrarAdmin();
  }

  //editar categoria
  function editarCat(){
    $id_categoria = $_GET["id_categoria"];
    if (isset($_POST["nombre"])){
      $categoriaEditada = $_POST["nombre"];
      $this->model->editarCat($categoriaEditada, $id_categoria);
    }
    $this->mostrarAdmin();
  }

  //eliminar categoria
  function eliminarCat(){
    $key = $_GET['id_categoria'];
    $this->model->eliminarCat($key);
    $this->mostrarAdmin();
  }
}

?>
