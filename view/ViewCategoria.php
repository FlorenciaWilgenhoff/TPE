<?php
require_once('libs/Smarty.class.php');

class ViewCategoria{

  private $smarty;

  function __construct(){
      $this->smarty = new Smarty();
  }

  function listar_categorias($listaCategorias){
    $this->smarty->assign('categorias',$listaCategorias);
  	$this->smarty->display("listados.tpl");
  }

  function mostrarCategoria($categoria){
    $this->smarty->assign('categoria',$categoria);
    $this->smarty->display("verAnime.tpl");
  }

  function mostrar_admin($categorias){
    $this->smarty->assign("categorias", $categorias);
    $this->smarty->display("adminCategoria.tpl");
   }

function formEditar($categoria){
    $this->smarty->assign("categoria", $categoria);
    $this->smarty->display("editarCat.tpl");
   }


   }





?>