<?php
require_once('libs/Smarty.class.php');

class ViewAnime{

  private $smarty;

  function __construct(){
    $this->smarty = new Smarty();
  }

  function listar_animes($listaAnimes, $categorias){
    $this->smarty->assign('animes',$listaAnimes);
    $this->smarty->assign('categorias',$categorias);
    $this->smarty->display("listados.tpl");
  }

  function mostrarAnime($anime, $categoria){
    $this->smarty->assign('anime',$anime);
    $this->smarty->assign('categoria',$categoria);
    $this->smarty->display("verAnime.tpl");
  }

  function mostrar_admin($animes, $categorias){
    $this->smarty->assign("animes", $animes);
    $this->smarty->assign("categorias", $categorias);
    $this->smarty->display("adminAnime.tpl");

  }
  function formEditar($anime, $imagenes){
    $this->smarty->assign("imagenes", $imagenes);
    $this->smarty->assign("anime", $anime);
    $this->smarty->display("editarAnime.tpl");
  }

}

?>
