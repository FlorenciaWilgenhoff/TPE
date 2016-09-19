<?php

require_once("model/ModelDescargas.php");
require_once("view/ViewDescargas.php");

class ControllerDescarga {

    private $model;
    private $view;

    function __construct(){
      $this->model = new ModelDescargas();
      $this->view = new ViewDescargas();
    }

   function mostrar(){
   	$this->view->MostrarDescargas();
   }


}

 ?>
