<?php
require_once('view/LoginView.php');
//require_once('models/UserModel.php');
require_once('controller/ControllerSerie.php');
class ControllerLogin
{
  private $view;
  private $model;
  function __construct()
  {
   // $this->model = new UserModel();
    $this->view = new ViewLogin();
  }
  public function validar(){
  }
  public function login(){
    if(!isset($_REQUEST['txtUser']))
      $this->view->mostrar([]);
    else {
      $user = $_REQUEST['txtUser'];
      $pass = $_REQUEST['txtPass'];
      $hash = $this->modelo->getUser($user)["password"];
      // falta controlar el caso de que el usuario no exista
      if(password_verify($pass, $hash))
      {
        session_start();
        $_SESSION['USER'] = $user;
        header("Location: mostrar_tareas");
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
}
 ?>