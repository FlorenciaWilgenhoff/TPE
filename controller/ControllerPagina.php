<?php

require_once("model/ModelPagina.php");
require_once("view/ViewPagina.php");

class ControllerPagina {

    private $model;
    private $view;

    function __construct(){
      $this->model = new ModelPagina();
      $this->view = new ViewPagina();
    }

   function mostrar(){
   	$this->view->MostrarPagina();
   }

}

 ?>
