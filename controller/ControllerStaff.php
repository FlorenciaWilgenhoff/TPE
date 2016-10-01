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
function nuevoStaff(){
     $staff = array($_POST['nombre'],$_POST['apellido'],$_POST['edad'],$_POST['email'],$_POST['puesto'],$_POST['motivo']);
     $this->model->nuevoStaff($staff);
   }
 }

 ?>
