<?php

require_once("model/ModelAnime.php");
require_once("view/ViewAnime.php");

class ControllerAnime {

    private $model;
    private $view;

    function __construct(){
      $this->model = new ModelAnime();
      $this->view = new ViewAnime();
    }

   function listar(){
   	$this->view->listar_animes();
   }

}

 ?>
