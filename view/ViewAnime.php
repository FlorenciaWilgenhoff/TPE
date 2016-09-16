<?php
require_once('libs/Smarty.class.php');

class ViewAnime{

  private $smarty;

  function __construct(){
      $this->smarty = new Smarty();
  }

function listar_animes(){
	$this->smarty->display("anime.tpl");
}

}





?>