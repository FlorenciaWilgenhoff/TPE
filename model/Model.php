 <?php

include_once dirname(__DIR__) . '/sql/ConfigApp.php';
abstract class Model{
  protected $db;
  function __construct() {
    try {
      $this->db = new PDO('mysql:host='.HOST.';dbname='.rtrim(DBNAME).';charset=utf8', USUARIO, DBPASS);
    } catch (PDOException $e) {
        header('Location: sql/index.php');
        die();
    }
  }
}
 ?>