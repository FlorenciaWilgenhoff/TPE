<?php

require_once("model/ModelAnime.php");
require_once("model/ModelCategoria.php");
require_once("view/ViewAnime.php");

class ControllerAnime {

  private $model;
  private $view;
  private $modelCategoria;

  function __construct(){
    $this->model = new ModelAnime();
    $this->modelCategoria = new ModelCategoria();
    $this->view = new ViewAnime();
  }

  function listar(){
    $categorias = $this->modelCategoria->getCategorias();
    $this->view->listar_animes($this->model->getAnimes(), $categorias);
  }



  function mostrarAdmin(){
    $categorias = $this->modelCategoria->getCategorias();
    $animes = $this->model->getAnimes();
    $this->view->mostrar_admin($animes, $categorias);
  }

  function mostrarAnime(){
    $idAnime = $_GET["id_anime"];
    $anime = $this->model->getAnime($idAnime);
    $idCategoria = $anime["fk_id_categoria"];
    $categoria = $this->modelCategoria->getCategoria($idCategoria);
    $anime["imagenes"] = $this->model->getImagenes($idAnime);
    $this->view->mostrarAnime($anime, $categoria);

  }
  function iniciar(){
    $animes = $this->model->getAnimes();

    $this->view->mostrar($animes, $categorias);
  }

  function getDatosVerificados(){
    $anime = [];
    if (isset($_POST["nombre"]) && isset( $_POST["anio"]) && isset( $_POST["descripcion"]) && isset( $_POST["link"]) ){
      $anime["nombre"] = $_POST["nombre"];
      $anime["anio"] = $_POST["anio"];
      $anime["descripcion"] = $_POST["descripcion"];
      $anime["link"] = $_POST["link"];
      $anime["categoria"] = $_POST["categoria"];
    }
    return $anime;
  }

  function agregar(){
    $anime = $this->getDatosVerificados();
    if (count($anime) > 0){
      $this->model->crearAnime($anime, $this->getImagenesVerificadas($_FILES['imagenes']) );
    }
    $this->mostrarAdmin();

  }
  function editar(){
    $id_anime = $_GET["id_anime"];
    $imagenes = $this->model->getImagenes($id_anime);
    $animeNuevo = $this->getDatosVerificados();
    if (count($animeNuevo) > 0){
      foreach ($imagenes as $imagen) {
        if(isset($_POST["imagen".$imagen["id_ia"]])){
          $this->model->eliminarImagen($imagen["id_ia"]);
        }
      }
      $this->model->editarAnime($animeNuevo, $id_anime, $this->getImagenesVerificadas($_FILES['imagenes']));
      $this->mostrarAdmin();
    }
    else {
      $categorias= $this->modelCategoria->getCategorias();
      $anime = $this->model->getAnime($id_anime);
      $this->view->formEditar($anime, $this->model->getImagenes($id_anime), $categorias );
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
    $id = $_GET['id_anime'];
    $this->model->eliminarAnime($id);
    $this->mostrarAdmin();
  }


}

?>
