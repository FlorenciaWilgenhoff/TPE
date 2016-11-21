<!-- Como usuario: Poder postear comentarios en los ítems del sitio asignándoles un puntaje de 1 a 5.
Que los comentarios se actualicen en tiempo real, con una demora de 2 segundos.
COMO ADMIN DEL SITIO:
Quiero poder borrar comentarios.
-->
<?php
require_once ("model/Model.php");

class ModelComentario extends Model{

  function __construct() {

    parent::__construct();


  }


  function getComentarios($fk_id_serie){
    $sentencia = $this->db->prepare( "SELECT * from comentario where fk_id_serie=?");
    $sentencia->execute(array($fk_id_serie));
    $comentarios = $sentencia->fetchAll(PDO::FETCH_ASSOC);
    return $comentarios;
  }
 
  function getComentario($id_comentario){
    $sentencia = $this->db->prepare( "SELECT* from comentario where id_comentario=?");
    $sentencia->execute(array($id_comentario));
    return $sentencia->fetch(PDO::FETCH_ASSOC);
  }

  function agregarComentario($comentario){ //le tengo que pasar algo mas aca?
    $sentencia = $this->db->prepare("INSERT INTO comentario(nombre, puntaje, email, comentario, fk_id_serie) VALUES(?,?,?, ?,?)");
    $sentencia->execute(array($comentario["nombre"], $comentario["puntaje"], $comentario["email"], $comentario["comentario"], $comentario["fk_id_serie"]));
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
