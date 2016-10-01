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
<<<<<<< HEAD
=======

>>>>>>> dab9b6abd38a647b54754e2c1fc89c85cb7c9c1c
   function nuevoStaff(){
     $staff = array($_POST['nombre'],$_POST['apellido'],$_POST['edad'],$_POST['email'],$_POST['puesto'],$_POST['motivo']);
     $this->model->nuevoStaff($staff);
   }
<<<<<<< HEAD

=======
>>>>>>> dab9b6abd38a647b54754e2c1fc89c85cb7c9c1c
}

 ?>
