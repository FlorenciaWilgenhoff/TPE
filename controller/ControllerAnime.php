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

   function mostrarAdmin(){
    $animes = $this->model->getAnimes();
    $this->view->mostrar_admin($animes);
   }

   function mostrarAnime(){
    $idAnime = $_GET["id_anime"];
    $anime = $this->model->getAnime($idAnime);
    $anime["imagenes"] = $this->model->getImagenes($idAnime);
    
    $this->view->mostrarAnime($anime);

  }
  function iniciar(){
    $animes = $this->model->getAnimes();
    $this->view->mostrar($animes);
  }

      function agregar(){
     if (isset($_POST["nombre"]) && isset( $_POST["anio"]) && isset( $_POST["descripcion"]) && isset( $_POST["link"]) ){
     $anime["nombre"] = $_POST["nombre"];
     $anime["anio"] = $_POST["anio"];
     $anime["descripcion"] = $_POST["descripcion"];
     $anime["link"] = $_POST["link"];

     $this->model->crearAnime($anime,$this->getImagenesVerificadas($_FILES['imagenes']) );

     }
  
   }
   function editar(){ 
    $id_anime = $_GET["id_anime"];
    $imagenes = $this->model->getImagenes($id_anime);
     if (isset($_POST["nombre"]) && isset( $_POST["anio"]) && isset( $_POST["descripcion"]) && isset( $_POST["link"]) ){
     $animeEditado["nombre"] = $_POST["nombre"];
     $animeEditado["anio"] = $_POST["anio"];
     $animeEditado["descripcion"] = $_POST["descripcion"];
     $animeEditado["link"] = $_POST["link"];
     
     foreach ($imagenes as $imagen) {
        if(isset($_POST["imagen".$imagen["id_ia"]])){
          $this->model->eliminarImagen($imagen["id_ia"]);
        }
     }
     

     $this->model->editarAnime($animeEditado, $id_anime, $this->getImagenesVerificadas($_FILES['imagenes']));
    }  
     $anime = $this->model->getAnime($id_anime);
     // Arreglar para que no se repita el getImagenes
     $this->view->formEditar($anime, $this->model->getImagenes($id_anime));
    
   

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
          $this->model->crearAnime($anime,$imagenesVerificadas);
          $this->view->mostrarMensaje("Anime creado con imagen", "success");
        }
      }
      else{
        $this->view->mostrarMensaje("Error", "danger");
      }
    }
    else{
        $this->view->mostrarMensaje("La imagen es requerida","danger");
    }

    $this->iniciar();
  }

  function eliminar(){
    $key = $_GET['id_anime'];
    $this->model->eliminarAnime($key);
    $animes = $this->model->getAnimes();
    $this->view->mostrar_admin($animes);
  }

}

 ?>
