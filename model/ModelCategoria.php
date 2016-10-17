<?php
include_once 'model/ModelDB.php';
class ModelCategoria {

  private $db;

  function __construct() {
    $this->db = new DB();
    $this->db = $this->db->getDB();
  }

  
  function getCategorias(){
    $sentencia = $this->db->prepare( "select * from categoria");
    $sentencia->execute();
    $categorias = $sentencia->fetchAll(PDO::FETCH_ASSOC);
    return $categorias;
  }

  
  function getCategoria($id_categoria){
    $sentencia = $this->db->prepare( "select * from categoria where id_categoria=?");
    $sentencia->execute(array($id_categoria));
    return $sentencia->fetch(PDO::FETCH_ASSOC);
  }
 
  function crearCat($categoria){
    $sentencia = $this->db->prepare("INSERT INTO categoria(nombre) VALUES(?)");
    $sentencia->execute(array($categoria));
  }
  
  function editarCat ($categoria, $id_categoria){
    $sentencia = $this->db->prepare(" UPDATE categoria SET nombre=? WHERE id_categoria=?");
    $sentencia->execute(array($categoria, $id_categoria));
  }

  
  function eliminarCat($id_categoria){
    $sentencia = $this->db->prepare("delete from categoria where id_categoria=?");
    $sentencia->execute(array($id_categoria));
  }

}

?>
