<?php
require_once ("model/Model.php");

class ModelLogin extends Model{

  function __construct() {

    parent::__construct();


  }


  function getUsuario($usuario){
    $sentencia = $this->db->prepare( "SELECT  * from usuario where email = ?");
    $sentencia->execute(array($usuario));
    return $sentencia->fetch(PDO::FETCH_ASSOC);
    
  }
  function agregarUsuario($usuario){
  $sentencia = $this->db->prepare("INSERT INTO usuario(email, password) VALUES (?,?)");
  $sentencia->execute(array($usuario["email"],$usuario["password"]));
  
}
}

?>
