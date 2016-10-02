<?php


class ModelAnime
{
  private $animes;
  private $db;
	function __construct()
	{
	 $this->db = new PDO('mysql:host=localhost;dbname=tpe;charset=utf8', 'root', '');

	}
   
   //obtengo los animes
	function getAnimes(){
    $sentencia = $this->db->prepare( "select * from anime");
    $sentencia->execute();
    $animes = $sentencia->fetchAll(PDO::FETCH_ASSOC);

    return $animes;
  }
    //creo anime
  	function crearAnime($anime, $imagenes){
    $sentencia = $this->db->prepare("INSERT INTO anime(nombre, noticia, año, link) VALUES(?,?,?,?)");
    $sentencia->execute(array($anime["nombre"], $anime["descripcion"], $anime["anio"], $anime["link"]));
    $id_anime = $this->db->lastInsertId();

    
    foreach ($imagenes as $key => $imagen) {
      $path="images/".uniqid()."_".$imagen["name"];
      move_uploaded_file($imagen["tmp_name"], $path);
      $insertImagen = $this->db->prepare("INSERT INTO imagen_anime(path,fk_id_anime VALUES(?,?)");
      $insertImagen->execute(array($path,$id_anime));
    }
   }
    function getImagenes($id_anime){
    $sentencia = $this->db->prepare( "select * from imagen_anime where fk_id_anime=?");
    $sentencia->execute(array($id_anime));
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

      //elimino anime
    function eliminarAnime($id_anime){
    
    $sentencia = $this->db->prepare("delete from anime where id_anime=?");
    $sentencia->execute(array($id_anime));
  }

    function getAnime($id_anime){
      $sentencia = $this->db->prepare( "select * from anime where id_anime=?");
      $sentencia->execute(array($id_anime));
      return $sentencia->fetch(PDO::FETCH_ASSOC);
    }
  











}






?>

    
