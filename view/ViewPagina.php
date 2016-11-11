<?php
require_once('libs/Smarty.class.php');

class ViewPagina{

  private $smarty;

  function __construct(){
      $this->smarty = new Smarty();
  }

	function MostrarPagina(){
    session_start();
    $this->smarty->assign("usuario", $_SESSION["USER"]);
		$this->smarty->display("header.tpl");
	}
	function MostrarHome(){
		$this->smarty->display("home.tpl");
	}
  function MostrarDescargas(){
  	$this->smarty->display("descargas.tpl");
  }

}





?>
