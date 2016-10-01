<?php

<<<<<<< HEAD

=======
/**
*
*/
>>>>>>> dab9b6abd38a647b54754e2c1fc89c85cb7c9c1c
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
