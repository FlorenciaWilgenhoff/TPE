<?php
require_once('libs/Smarty.class.php');

class ViewComentario{

  private $smarty;

  function __construct(){
    $this->smarty = new Smarty();
  }

  function mostrarComentario($comentario){
    $this->smarty->assign('comentarios',$comentario);
    $this->smarty->display("verComentarios.tpl");
  }

 
}

?>
