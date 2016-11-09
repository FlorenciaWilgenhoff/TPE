<?php

require_once("model/ModelSerie.php");
require_once("model/ModelCategoria.php");
require_once("view/ViewSerie.php");

class ControllerSerie {

  private $model;
  private $view;
  private $modelCategoria;

  function __construct(){
    $this->model = new ModelSerie();
    $this->modelCategoria = new ModelCategoria();
    $this->view = new ViewSerie();
  }

  function listar(){
    $categorias = $this->modelCategoria->getCategorias();
    $this->view->listar_series($this->model->getSeries(), $categorias);
  }



  function mostrarAdmin(){
    $categorias = $this->modelCategoria->getCategorias();
    $series = $this->model->getSeries();
    $this->view->mostrar_admin($series, $categorias);
  }

  function mostrarSerie(){
    $idSerie = $_GET["id_serie"];
    $serie = $this->model->getSerie($idSerie);
    $idCategoria = $serie["fk_id_categoria"];
    $categoria = $this->modelCategoria->getCategoria($idCategoria);
    $serie["imagenes"] = $this->model->getImagenes($idSerie);
    $this->view->mostrarSerie($serie, $categoria);

  }


  function mostrarSeries(){
    if(isset($_GET["categoria"])){
      $this->view->filtrar($this->model->getSeriesCat($_GET["categoria"]));
    }
    else {
      $this->editar();
      $this->view->mostrar_admin();
    }
  }

  
  function iniciar(){
    $series = $this->model->getSeries();

    $this->view->mostrar($series, $categorias);
  }


  function getDatosVerificados(){
    $serie = [];
    if (isset($_POST["nombre"]) && isset( $_POST["anio"]) && isset( $_POST["descripcion"]) && isset( $_POST["link"]) ){
      $serie["nombre"] = $_POST["nombre"];
      $serie["anio"] = $_POST["anio"];
      $serie["descripcion"] = $_POST["descripcion"];
      $serie["link"] = $_POST["link"];
      $serie["categoria"] = $_POST["categoria"];
    }
    return $serie;
  }

  function agregar(){
    $serie = $this->getDatosVerificados();
    if (count($serie) > 0){
      $this->model->crearSerie($serie, $this->getImagenesVerificadas($_FILES['imagenes']) );
    }
    $this->mostrarAdmin();

  }
  function editar(){
    $id_serie = $_GET["id_serie"];
    $imagenes = $this->model->getImagenes($id_serie);
    $serieNueva = $this->getDatosVerificados();
    if (count($serieNueva) > 0){
      foreach ($imagenes as $imagen) {
        if(isset($_POST["imagen".$imagen["id_is"]])){
          $this->model->eliminarImagen($imagen["id_is"]);
        }
      }
      $this->model->editarSerie($serieNueva, $id_serie, $this->getImagenesVerificadas($_FILES['imagenes']));
      $this->mostrarAdmin();
    }
    else {
      $categorias= $this->modelCategoria->getCategorias();
      $serie = $this->model->getSerie($id_serie);
      $this->view->formEditar($serie, $this->model->getImagenes($id_serie), $categorias );
    }


  }

  function getImagenesVerificadas($imagenes){
    $imagenesVerificadas = [];
    for ($i=0; $i < count($imagenes['size']); $i++) {
      if($imagenes['size'][$i]>0 && $imagenes['type'][$i]=="image/jpeg"){
        $imagen_aux = [];
        $imagen_aux['tmp_name']=$imagenes['tmp_name'][$i];
        $imagen_aux['name']=$imagenes['name'][$i];
        $imagenesVerificadas[]=$imagen_aux;
      }
    }

    return $imagenesVerificadas;
  }

  function eliminar(){
    $id = $_GET['id_serie'];
    $this->model->eliminarSerie($id);
    $this->mostrarAdmin();
  }
   function filtroCat() {
    if (isset($_GET["id_categoria"])) {
      $categoria = $this->modelCategoria->getCategorias($_GET["id_categoria"]);
      $series = $this->model->getSeriesCat($_GET["id_categoria"]);
      $this->view->filtrar($series, $categoria);
    }
  }


}

?>
