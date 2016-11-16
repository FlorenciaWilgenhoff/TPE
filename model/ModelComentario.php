<!-- Como usuario: Poder postear comentarios en los ítems del sitio asignándoles un puntaje de 1 a 5.
Que los comentarios se actualicen en tiempo real, con una demora de 2 segundos.
COMO ARQUITECTO DEL SISTEMA:
Quiero que todo el sistema de comentarios funcione por medio de una API REST. 
COMO ADMIN DEL SITIO:
Quiero poder borrar comentarios.
-->
<?php
require_once ("model/Model.php");

class ModelComentario extends Model{

  function __construct() {

    parent::__construct();


  }


  function getComentarios(){
    $sentencia = $this->db->prepare( "SELECT * from comentario");
    $sentencia->execute();
    $comentarios = $sentencia->fetchAll(PDO::FETCH_ASSOC);
    return $comentarios;
  }
 
  function getComentario($id_comentario){
    $sentencia = $this->db->prepare( "SELECT* from comentario where id_comentario=?");
    $sentencia->execute(array($id_comentario));
    return $sentencia->fetch(PDO::FETCH_ASSOC);
  }

  function agregarComentario($comentario){
    $sentencia = $this->db->prepare("INSERT INTO comentario(nombre, puntaje, email, comentario) VALUES(?,?,?, ?)");
    $sentencia->execute(array($comentario["nombre"], $comentario["puntaje"], $comentario["email"], $comentario["comentario"]));
    $id_comentario = $this->db->lastInsertId();
    return $id_comentario;
  }
  function eliminarComentario($id_comentario){

    $sentencia = $this->db->prepare("DELETE from comentario where id_comentario=?");
    $sentencia->execute(array($id_comentario));
    return $sentencia->rowCount();
  }
  }

?>
