<?php

require_once("model/ModelPagina.php");
require_once("view/ViewPagina.php");

class ControllerPagina {


	private $modelAnime;
    private $model;
    private $view;

    function __construct(){
      $this->modelAnime = new ModelAnime();
      $this->model = new ModelPagina();
      $this->view = new ViewPagina();
    }

   function mostrar(){
   	$this->view->MostrarPagina();
   }

   function mostrarAdmin(){
   	$animes = $this->modelAnime->getAnimes();
   	$this->view->mostrar_admin($animes);
   }

}

 ?>
