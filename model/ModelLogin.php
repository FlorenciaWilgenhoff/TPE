<?php
require_once ("model/ModelDB.php");

class ModelLogin extends DB{

  function __construct() {

    parent::__construct();


  }


  function getUsuario($usuario){
    $sentencia = $this->db->prepare( "select * from usuario where email = ?");
    $sentencia->execute(array($usuario));
    return $sentencia->fetch(PDO::FETCH_ASSOC);
  }
}

?>
