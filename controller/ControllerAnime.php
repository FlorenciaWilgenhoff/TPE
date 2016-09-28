<?php

require_once("model/ModelAnime.php");
require_once("view/ViewAnime.php");

class ControllerAnime {

    private $model;
    private $view;

    function __construct(){
      $this->model = new ModelAnime();
      $this->view = new ViewAnime();
    }

   function listar(){
   	$this->view->listar_animes($this->model->getAnimes());
   }


  function mostrarAnime(){
    $idAnime = $_GET["id_anime"];
    $anime = $this->model->getAnime($idAnime);
    $anime["imagenes"] = $this->model->getImagenes($idAnime);
    
    $this->view->mostrarAnime($anime);

  }
  function iniciar(){
    $animes = $this->modelo->getAnimes();
    $this->vista->mostrar($animes);
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

  function guardar(){
    $anime = $_POST['anime'];
    if(isset($_FILES['imagenes'])){
      $imagenesVerificadas = $this->getImagenesVerificadas($_FILES['imagenes']);
      if(count($imagenesVerificadas)>0){
        if(!$this->filtro($anime)){
          $this->modelo->crearAnime($anime,$imagenesVerificadas);
          $this->vista->mostrarMensaje("Anime creado con imagen", "success");
        }
      }
      else{
        $this->vista->mostrarMensaje("Error", "danger");
      }
    }
    else{
        $this->vista->mostrarMensaje("La imagen es requerida","danger");
    }

    $this->iniciar();
  }

  function eliminar(){
    $key = $_GET['id_anime'];
    $this->modelo->eliminarAnime($key);
    $animes = $this->modelo->getAnimes();
    $this->vista->getLista($animes);
  }

}

 ?>
