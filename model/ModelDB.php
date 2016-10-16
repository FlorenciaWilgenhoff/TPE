<?php
class DB{

  private $db;
  function __construct(){
      $this->db = new PDO('mysql:host=localhost;dbname=tpe;charset=utf8', 'root', '');
  }
  function getDB(){
    return $this->db;
  }

}

 ?>
