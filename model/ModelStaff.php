<?php
require_once 'model/ModelDB.php';
class ModelStaff extends DB{


  function __construct() {
  	parent::__construct();
  }
	function nuevoStaff($staff) {
		$sentencia = $this->db->prepare("INSERT INTO staff(nombre,apellido,edad,email,puesto,motivo) VALUES(?,?,?,?,?,?)");
    $sentencia->execute($staff);
	}
}


?>
