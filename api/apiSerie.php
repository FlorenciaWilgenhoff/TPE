 <?php
 require_once 'api.php';
 require '../model/ModelComentario.php';


class apiSerie extends Api
 {
   private $model;
   public function __construct($request)
  {
     parent::__construct($request);
     $this->model = new ModelComentario();
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
           if(count($argumentos)>0){
             $error['Error'] = "El comentario no existe";
             $success['Success'] = "El comentario se borro";
             $filasAfectadas = $this->ModelComentario->eliminarComentario($argumentos[0]);
             return ($filasAfectadas == 1) ? $success : $error;
           }
         break;

         case 'POST':
             if(count($argumentos)==0){
               $error['Error'] = "El comentario no se creo";
               $comentario = $_POST['nombre'];
               $comentario = $_POST['puntaje'];
               $comentario = $_POST['email'];
               $comentario = $_POST['comentario'];
               $id_comentario = $this->ModelComentario->crearComentario($comentario);
               return ($id_comentario > 0) ? $this->ModelComentario->getComentario($id_comentario) : $error;
             }
           break;
       default:
            return "Only accepts GET";
         break;
     }
    }

  ?>
