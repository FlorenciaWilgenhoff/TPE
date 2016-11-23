<?php
require_once('libs/Smarty.class.php');

class ViewSerie{

  private $smarty;

  function __construct(){
    $this->smarty = new Smarty();
  }

  function listar_series($listaSeries, $categorias){
    $this->smarty->assign('series',$listaSeries);
    $this->smarty->assign('categorias',$categorias);
    $this->smarty->display("listados.tpl");
  }

  function mostrarSerie($serie, $categoria){
    $this->smarty->assign('serie',$serie);
    session_start();
    if(isset($_SESSION["id"]) && isset($_SESSION["USER"])){
       $this->smarty->assign('usuario',$_SESSION["id"]);
    }
    $this->smarty->assign('categoria',$categoria);
    $this->smarty->display("verSerie.tpl");
  }

  function mostrar_admin($series, $categorias){
    $this->smarty->assign("series", $series);
    $this->smarty->assign("categorias", $categorias);
    $this->smarty->display("adminSerie.tpl");

  }
  function formEditar($serie, $imagenes, $categorias){
    $this->smarty->assign("imagenes", $imagenes);
    $this->smarty->assign("serie", $serie);
    $this->smarty->assign("categorias", $categorias);
    $this->smarty->display("editarSerie.tpl");
  }

   function filtrar($series, $categoria)
  {
    $this->smarty->assign("series", $series);
    $this->smarty->assign("categorias", $categoria);
    $this->smarty->display("filtrar.tpl");
  }


}

?>
