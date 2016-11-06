<?php
include_once 'model/ModelDB.php';
class ModelSerie{

  private $db;

  function __construct() {
    $this->db = new DB();
    $this->db = $this->db->getDB();
  }

  
  function getSeries(){
    $sentencia = $this->db->prepare( "select * from serie");
    $sentencia->execute();
    $series = $sentencia->fetchAll(PDO::FETCH_ASSOC);
    return $series;
  }
 
  function getSerie($id_serie){
    $sentencia = $this->db->prepare( "select * from serie where id_serie=?");
    $sentencia->execute(array($id_serie));
    return $sentencia->fetch(PDO::FETCH_ASSOC);
  }

  function addImagenes($imagenes, $id_serie){
    foreach ($imagenes as $key => $imagen) {
      $path="images/".uniqid()."_".$imagen["name"];
      move_uploaded_file($imagen["tmp_name"], $path);
      $insertImagen = $this->db->prepare("INSERT INTO imagen_serie(path,fk_id_serie) VALUES(?,?)");
      $insertImagen->execute(array($path,$id_serie));
    }
  }

  
  function crearSerie($serie, $imagenes){
    $sentencia = $this->db->prepare("INSERT INTO serie(nombre, noticia, año, link, fk_id_categoria) VALUES(?,?,?,?,?)");
    $sentencia->execute(array($serie["nombre"], $serie["descripcion"], $serie["anio"], $serie["link"], $serie["categoria"]));
    $id_serie = $this->db->lastInsertId();
    $this->addImagenes($imagenes, $id_serie);
    return $id_serie;
  }

  function getImagenes($id_serie){
    $sentencia = $this->db->prepare( "select * from imagen_serie where fk_id_serie=?");
    $sentencia->execute(array($id_serie));
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function eliminarImagen($id_imagen){
    $sentencia = $this->db->prepare( "delete from imagen_serie where id_is=?");
    $sentencia->execute(array($id_imagen));
  }

  function editarSerie ($serie, $id_serie, $imagenes){
    $sentencia = $this->db->prepare(" UPDATE serie SET nombre=?,año=?,link=?,noticia=?, fk_id_categoria=? WHERE id_serie=?");
    $sentencia->execute(array($serie["nombre"], $serie["anio"], $serie["link"], $serie["descripcion"], $serie["categoria"], $id_serie ));
    $this->addImagenes($imagenes, $id_serie);

  }
  
  function eliminarSerie($id_serie){

    $sentencia = $this->db->prepare("delete from serie where id_serie=?");
    $sentencia->execute(array($id_serie));
    return $sentencia->rowCount();
  }



}

?>
