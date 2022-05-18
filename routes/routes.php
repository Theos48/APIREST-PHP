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

//Comprobación de ruta
$second_parameter_check = !empty($routesArray[2]);
switch ($routesArray[1]) {
  case 'cursos':
    //Verifición de segundo parametro
    if ($second_parameter_check && $routesArray[1] == 'cursos') {
      $response['detalles'] = "Estoy en el curso {$routesArray[2]}";
      echo json_encode($response, true);
      return;
    }
    // En caso de un solo parametro
    $response['detalles'] = "Estoy en {$routesArray[1]}";
    echo  json_encode($response, true);
    break;
  case 'registros':
    if ($second_parameter_check && $routesArray[1] == 'registros') {
      $response['detalles'] = "Estoy en el registro {$routesArray[2]}";
      echo json_encode($response, true);
      return;
    }
    $response['detalles'] = "Estoy en {$routesArray[1]}";
    echo  json_encode($response, true);
    break;
  default:
    echo  json_encode($response, true);
    break;
}
