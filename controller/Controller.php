<?php 

require_once("model/ModelLogin.php");
class Controller{

  
  protected $modelLogin;
  function __construct(){
    $this->modelLogin = new ModelLogin();
   
  }

function comprobarAdmin(){
   $usuario = ""; 
    session_start();
    if (isset($_SESSION['USER'])){
       $usuario = $this->modelLogin->getUsuario($_SESSION['USER']);
        if (!$usuario["administrador"]) {
          header("Location: index.php");
          die();
        }
    }
    else {
          header("Location: index.php");
          die();
    }
    
   
}
}

?>