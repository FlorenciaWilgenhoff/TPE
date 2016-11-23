<?php
require_once (dirname(__DIR__) . "/model/Model.php");

class ModelComentario extends Model{

  function __construct() {

    parent::__construct();


  }


  function getComentarios(){
    $sentencia = $this->db->prepare("SELECT comentario.*, usuario.email FROM usuario, comentario where comentario.fk_id_usuario = usuario.id_usuario");
    $sentencia->execute();
    $comentarios = $sentencia->fetchAll(PDO::FETCH_ASSOC);
    return $comentarios;
  }
 
  function getComentario($id_comentario){
    $sentencia = $this->db->prepare( "SELECT comentario.*, usuario.email FROM usuario, comentario where comentario.fk_id_usuario = usuario.id_usuario AND id_comentario= ?");
    $sentencia->execute(array($id_comentario));
    return $sentencia->fetch(PDO::FETCH_ASSOC);
  }

  function agregarComentario($comentario){ //le tengo que pasar algo mas aca?
    $sentencia = $this->db->prepare("INSERT INTO comentario(puntaje, comentario, fk_id_serie, fk_id_usuario) VALUES(?,?,?,?)");
    $sentencia->execute(array($comentario["puntaje"], $comentario["comentario"], $comentario["fk_id_serie"],$comentario["fk_id_usuario"]));
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
