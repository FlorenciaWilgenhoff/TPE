<?php


class ModelStaff
{

	function __construct()
	{
		$this->db = new PDO('mysql:host=localhost;dbname=tpe;charset=utf8', 'root', '');
	}

	function nuevoStaff($staff)
	{
		$sentencia = $this->db->prepare("INSERT INTO staff(nombre,apellido,edad,email,puesto,motivo) VALUES(?,?,?,?,?,?)");
    $sentencia->execute($staff);
	}
}






?>
