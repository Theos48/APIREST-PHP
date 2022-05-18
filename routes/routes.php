<?php
$response = array(
  'detalles' => 'no encontrado',
);

//obtener rutas despues del home
$routesArray = array_filter(explode('/', $_SERVER['REQUEST_URI']));

//Comprobacion si rutas esta vacia
if (count($routesArray) == 0) {
  echo json_encode($response, true);
  return;
}



$response['detalles'] = "Estoy en {$routesArray[1]}";

echo json_encode($routesArray, true);

// switch ($routesArray[1]){
//   case 'cursos':
    
//     break;
//   case 'registros':
//     break;
// }
