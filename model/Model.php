<?php
class Model {

  protected $db;
  function __construct() {
    try {
      $this->db = new PDO('mysql:host=localhost;dbname=tpe;charset=utf8', "root", "");
    } catch (PDOException $e) {
        header('Location: db');
        die();
    }
  }
}
 ?>