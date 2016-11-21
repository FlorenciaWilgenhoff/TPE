<?php

require_once("model/ModelComentario.php");
require_once("view/ViewComentario.php");

class ControllerComentario {

  private $model;
  private $view;

  function __construct(){
    $this->model = new ModelComentario();
    $this->view = new ViewComentario();
  }

 
 

  function mostrarComentario(){
    $idSerie = $_GET["fk_id_serie"]; 
    $comentario = $this->model->getComentarios($idSerie);
    $this->view->mostrarComentario($comentario);

  }

  function getDatosVerificados(){
    $comentario = [];
    if (isset($_POST["nombre"]) && isset( $_POST["puntaje"]) && isset( $_POST["email"]) && isset( $_POST["comentario"])){
      $comentario["nombre"] = $_POST["nombre"];
      $comentario["puntaje"] = $_POST["puntaje"];
      $comentario["email"] = $_POST["email"];
      $comentario["comentario"] = $_POST["comentario"];
    }
    return $comentario;
  }

  function agregarComentario(){
    $id = $_GET['fk_id_serie'];
    $comentario = $this->getDatosVerificados();
    if (count($comentario) > 0){
      $this->model->agregarComentario($comentario, $id);
    }
    $this->mostrarComentario(); //VER SI ESTO ES LO QUE QUIERO QUE MUESTRE

  }


 
  function eliminar(){
    $id = $_GET['id_comentario'];
    $this->model->eliminarComentario($id);
    $this->mostrarComentario();
 //ver si esta bien
   }
 
  

}

?>
