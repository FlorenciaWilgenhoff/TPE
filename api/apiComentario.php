 <?php
 require_once 'api.php';
 require '../model/ModelComentario.php';
 require "../controller/Controller.php";

class apiComentario extends Api
 {
   private $ModelComentario;
   private $ControllerAdmin;
   public function __construct($request)
  {
     parent::__construct($request);
     $this->ModelComentario = new ModelComentario();
     $this->ControllerAdmin = new Controller();
   }
 protected function comentario($argumentos){
     switch ($this->method) {
       case 'GET':
           if(count($argumentos)>0){
             $comentario = $this->ModelComentario->getComentario($argumentos[0]);
             $error['Error'] = "El comentario no existe";
             return ($comentario) ? $comentario : $error;
           }else{
            return $this->ModelComentario->getComentarios();
           }
         break;

       case 'DELETE':
            $this->ControllerAdmin->comprobarAdmin();
           if(count($argumentos)>0){
             $error['Error'] = "El comentario no existe";
             $success['Success'] = "El comentario se borro";
             $filasAfectadas = $this->ModelComentario->eliminarComentario($argumentos[0]);
             return ($filasAfectadas == 1) ? $success : $error;
           }
         break;

         case 'POST':
            session_start();
             if(count($argumentos)==0 && isset($_SESSION["USER"])){
               $error['Error'] = "El comentario no se creo";
               $comentario['fk_id_usuario'] = $_POST['id_usuario'];
               $comentario['puntaje'] = $_POST['puntaje'];
               $comentario ['comentario'] = $_POST['comentario'];
               $comentario ['fk_id_serie'] = $_POST['id_serie'];
               $id_comentario = $this->ModelComentario->agregarComentario($comentario);
               return ($id_comentario > 0) ? $this->ModelComentario->getComentario($id_comentario) : $error;
             }
           break;
       default:
            return "Only accepts GET";
         break;
     }
    }
}
  ?>
