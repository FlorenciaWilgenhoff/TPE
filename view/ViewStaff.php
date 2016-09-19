<?php
require_once('libs/Smarty.class.php');

class ViewStaff{

  private $smarty;

  function __construct(){
      $this->smarty = new Smarty();
  }

function MostrarStaff(){
	$this->smarty->display("staff.tpl");
}

}





?>