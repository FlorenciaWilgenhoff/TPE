<?php
require_once('libs/Smarty.class.php');

class ViewCategoria{

  private $smarty;
  private $categorias;

  function __construct(){
    $this->smarty = new Smarty();
  }

  function assignCategorias($categorias){
    $this->categorias = $categorias;
    $this->smarty->assign('categorias',$this->categorias);
  }

  function listar_categorias(){
    $this->smarty->display("listados.tpl");
  }

  function mostrar_admin(){
    $this->smarty->display("adminCategoria.tpl");
  }
}

?>
