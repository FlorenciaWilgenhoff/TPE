<?php
require_once('libs/Smarty.class.php');

class ViewPagina{

  private $smarty;

  function __construct(){
      $this->smarty = new Smarty();
  }

	function MostrarPagina(){
		$this->smarty->display("index.tpl");
	}
	function MostrarHome(){
		$this->smarty->display("home.tpl");
	}
  function MostrarDescargas(){
  	$this->smarty->display("descargas.tpl");
  }

}





?>
