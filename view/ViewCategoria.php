<?php
require_once('libs/Smarty.class.php');

class ViewCategoria{

  private $smarty;

  function __construct(){
    $this->smarty = new Smarty();
  }

  function assignCategorias($categorias){
    $this->smarty->assign('categorias',$categorias);
  }

  function listar_categorias(){
    $this->smarty->display("listados.tpl");
  }

  function mostrar_admin(){
    $this->smarty->display("adminCategoria.tpl");
  }
}

?>
