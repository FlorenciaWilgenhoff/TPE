<?php


class ModelCategoria
{
  private $categorias;
  private $db;
	function __construct()
	{
	 $this->db = new PDO('mysql:host=localhost;dbname=tpe;charset=utf8', 'root', '');

	}

   //obtengo las categorias
	function getCategorias(){
    $sentencia = $this->db->prepare( "select * from categoria");
    $sentencia->execute();
    $categorias = $sentencia->fetchAll(PDO::FETCH_ASSOC);

    return $categorias;
  }
    

    //obtengo una categoria
    function getCategoria($id_categoria){
      $sentencia = $this->db->prepare( "select * from categoria where id_categoria=?");
      $sentencia->execute(array($id_categoria));
      return $sentencia->fetch(PDO::FETCH_ASSOC);
    }
  //creo una categoria
    function crearCategoria($categoria){
    $sentencia = $this->db->prepare("INSERT INTO categoria(nombre) VALUES(?)");
    $sentencia->execute(array($categoria["nombre"]));
    $id_categoria = $this->db->lastInsertId();

   
   }
    //edito categoria
   function editarCat ($categoria, $id_categoria){
     $sentencia = $this->db->prepare(" UPDATE categoria SET nombre=? WHERE id_categoria=?");
     $sentencia->execute(array($categoria, $id_categoria ));


      }
    
    //elimino categoria

 function eliminarCat($id_categoria){
    
    $sentencia = $this->db->prepare("delete from categoria where id_categoria=?");
    $sentencia->execute(array($id_categoria));
  }







	}






?>

    
