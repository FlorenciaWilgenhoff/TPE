<?php
require_once('view/ViewLogin.php');
require_once('model/ModelLogin.php');
require_once('controller/ControllerSerie.php');
class ControllerLogin
{
  private $view;
  private $model;
  function __construct()
  {
    $this->model = new ModelLogin();
    $this->view = new ViewLogin();
  }

  public function validar(){
  }
  public function login(){
    if(!isset($_REQUEST['txtUser']))
      $this->view->mostrar([]);
    else {
      $usuario = $_REQUEST['txtUser'];
      $pass = $_REQUEST['txtPass'];
      $hash = $this->model->getUsuario($usuario)["password"];
      // falta controlar el caso de que el usuario no exista
      if(password_verify($pass, $hash))
      {
        session_start();
        $_SESSION['USER'] = $usuario;
        header("Location: index.php");
        die();
      }
      else
      {
            $this->view->mostrar(["BAD"]);
      }
    }
  }
  public function checkLogin(){
    session_start();
    if(!isset($_SESSION['USER'])){
      header("Location: index.php");
      die();
    };
  }
  public function logout(){
    session_start();
    session_destroy();
    header("Location: login");
    die();
  }
  //crear funcion para registrarse
  public function registrarse (){
    $usuario = []; 
    if (isset($_POST["email"]) && isset( $_POST["password"])){
      $usuario["email"] = $_POST["email"];
      $encriptar = password_hash($_POST["password"], PASSWORD_DEFAULT);
      $usuario["password"] = $encriptar;
      $this->model->agregarUsuario($usuario);
      header("Location: index.php");
      die();
     }
     $this->view->mostrarRegistro(); 
     
  }
  
}
 ?>