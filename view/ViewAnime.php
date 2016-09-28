<?php
require_once('libs/Smarty.class.php');

class ViewAnime{

  private $smarty;

  function __construct(){
      $this->smarty = new Smarty();
  }

function listar_animes($listaAnimes){
  $this->smarty->assign('animes',$listaAnimes);
	$this->smarty->display("listados.tpl");
}

  function mostrarAnime($anime){
    $this->smarty->assign('anime',$anime);
    $this->smarty->display("verAnime.tpl");
  }
/*
function agregarError($error){
    $this->smarty->assign('error',$error);
  }

  function mostrarMensaje($mensaje, $tipo){
    $this->smarty->assign('mensaje',$mensaje);
    $this->smarty->assign('tipoMensaje',$tipo);
  }

  function mostrar($animes){
    $this->smarty->assign('animes',$animes);
    $this->smarty->display('anime.tpl');
  }

  function getLista($animes){
    $this->smarty->assign('animes',$animes);
    $this->smarty->display('anime.tpl');
  }
*/

}





?>