<?php
require_once('libs/Smarty.class.php');

class ViewLogin
{
  private $smarty;

  function __construct()
  {
    $this->smarty = new Smarty();
  }

  function agregarError($error){
    $this->smarty->assign('error',$error);
  }

  function mostrar(){
    $this->smarty->display('login.tpl');
  }
  function mostrarRegistro(){   
      $this->smarty->display('formLogin.tpl');

    }
 

  function mostrarAdminUser($usuarios){ 
      $this->smarty->assign('usuarios',$usuarios);
      $this->smarty->display('adminUsuario.tpl');
    }
}



 ?>
