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
 
  function listarCat(){
    $this->view->listar_categorias($this->model->getCategorias());
   }



   function mostrarCategoria(){
   // $idCategoria = $_GET["id_categoria"];
    $categoria = $this->model->getCategorias();
    $this->view->mostrarCategoria($categoria);

  }

  //mostrar admin

  function mostrarAdmin(){
    $categorias = $this->model->getCategorias();
    $this->view->mostrar_admin($categorias);
   }
//iniciar

   function iniciar(){
    $categorias = $this->model->getCategorias();
    $this->view->mostrar($categorias);
  }
  //agregar categoria
  function agregarCat(){
     if (isset($_POST["nombre"])){
     $categoria["nombre"] = $_POST["nombre"];

     $this->model->crearCategoria($categoria);

     }
  
   }

//editar categoria
   function editarCat(){ 
    $id_categoria = $_GET["id_categoria"];
  
     if (isset($_POST["nombre"])){
     $categoriaEditada["nombre"] = $_POST["nombre"];
     }
     $this->model->editarCategoria($categoriaEditada, $id_categoria);
     
     $categoria = $this->model->getCategoria($id_categoria);
     $this->view->formEditar($categoria);
    
   }

  //eliminar categoria

   function eliminarCat(){
    $key = $_GET['id_categoria'];
    $this->model->eliminarCat($key);
    $categorias = $this->model->getCategorias();
    $this->view->mostrar_admin($categorias);
  }
}

 ?>