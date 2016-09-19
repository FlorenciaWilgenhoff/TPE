<?php

require_once("model/ModelStaff.php");
require_once("view/ViewStaff.php");

class ControllerStaff {

    private $model;
    private $view;

    function __construct(){
      $this->model = new ModelStaff();
      $this->view = new ViewStaff();
    }

   function mostrar(){
   	$this->view->MostrarStaff();
   }


}

 ?>
