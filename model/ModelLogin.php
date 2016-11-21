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

    function getUsuario2($usuario){
    $sentencia = $this->db->prepare( "SELECT  * from usuario where id_usuario = ?");
    $sentencia->execute(array($usuario));
    return $sentencia->fetch(PDO::FETCH_ASSOC);
    
  }
  function getUsuarios(){
    $sentencia = $this->db->prepare( "SELECT  * from usuario");
    $sentencia->execute();
    $usuarios = $sentencia->fetchAll(PDO::FETCH_ASSOC);
    return $usuarios;
  }
  function agregarUsuario($usuario){
  $sentencia = $this->db->prepare("INSERT INTO usuario(email, password, nombre) VALUES (?,?)");
  $sentencia->execute(array($usuario["email"],$usuario["password"], $usuario["nombre"]));
  }

function cambiarPermiso($usuario){
  
  $sentencia = $this->db->prepare("UPDATE `usuario` SET administrador= ? WHERE id_usuario = ?");
  $sentencia->execute(array(!$usuario["administrador"],$usuario["id_usuario"]));
  }

}

?>
