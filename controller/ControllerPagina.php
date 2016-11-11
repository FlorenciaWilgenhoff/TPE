<?php
require_once("view/ViewPagina.php");

class ControllerPagina {

    private $view;

    function __construct(){
      
      $this->view = new ViewPagina();
    }

   function mostrar(){
   	$this->view->MostrarPagina();
   }
   function mostrarHome(){
    $this->view->MostrarHome();
   }
   function mostrarDescargas(){
    $this->view->MostrarDescargas();
   }

}

 ?>
