<?php
include_once 'model/ModelDB.php';
class ModelStaff {

	private $db;

  function __construct() {
    $this->db = new DB();
    $this->db = $this->db->getDB();
  }

	function nuevoStaff($staff) {
		$sentencia = $this->db->prepare("INSERT INTO staff(nombre,apellido,edad,email,puesto,motivo) VALUES(?,?,?,?,?,?)");
    $sentencia->execute($staff);
	}
}


?>
