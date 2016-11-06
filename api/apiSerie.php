// <?php
// require_once 'api.php';
// require '../model/ModelSerie.php';
// require_once '../model/ModelCategoria.php';

// class apiSerie extends Api
// {
//   private $model;
//   private $modelCategorias;

//   public function __construct($request)
//  {
//     parent::__construct($request);
//     $this->model = new ModelSerie();
//     $this->modelCategorias = new ModelCategoria();
//   }

// protected function categoria($argumentos){
//     switch ($this->method) {
//       case 'GET':
//           if(count($argumentos)>0){
//             $categoria = $this->modelCategorias->getCategoria($argumentos[0]);
//             $error['Error'] = "La categoria no existe";
//             return ($categoria) ? $categoria : $error;
//           }else{
//             return $this->modelCategorias->getCategorias();
//           }
//         break;
//       case 'DELETE':
//           if(count($argumentos)>0){
//             $error['Error'] = "La categoria no existe";
//             $success['Success'] = "La categoria se borro";
//             $filasAfectadas = $this->modelCategorias->eliminarCat($argumentos[0]);
//             return ($filasAfectadas == 1) ? $success : $error;
//           }
//         break;
//         case 'POST':
//             if(count($argumentos)==0){
//               $error['Error'] = "La categoria no se creo";
//               $categoria = $_POST['nombre'];
//               $id_categoria = $this->modelCategorias->crearCat($categoria);
//               return ($id_categoria > 0) ? $this->modelCategorias->getCategoria($id_categoria) : $error;
//             }
//           break;
//       default:
//            return "Only accepts GET";
//         break;
//     }
//    }


//   protected function serie($argumentos){
//     switch ($this->method) {
//       case 'GET':
//           if(count($argumentos)>0){
//             $serie = $this->model->getSerie($argumentos[0]);
//             $error['Error'] = "La serie no existe";
//             return ($serie) ? $serie : $error;
//           }else{
//             return $this->model->getSeries();
//           }
//         break;
//       case 'DELETE':
//           if(count($argumentos)>0){
//             $error['Error'] = "La serie no existe";
//             $success['Success'] = "La serie se borro";
//             $filasAfectadas = $this->model->eliminarSerie($argumentos[0]);
//             return ($filasAfectadas == 1) ? $success : $error;
//           }
//         break;
//         case 'POST':
//             if(count($argumentos)==0){
//               $error['Error'] = "La serie no se creo";
//               $serie["nombre"] = $_POST["nombre"];
//               $serie["anio"] = $_POST["anio"];
//               $serie["descripcion"] = $_POST["descripcion"];
//               $serie["link"] = $_POST["link"];
//               $serie["categoria"] = $_POST["categoria"];
//               $id_serie = $this->model->crearSerie($serie,[]);
//               return ($id_serie > 0) ? $this->model->getSerie($id_serie) : $error;
//             }
//           break;
//       default:
//            return "Only accepts GET";
//         break;
//     }
//    }



// }


//  ?>
