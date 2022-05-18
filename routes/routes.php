<?php
require_once 'controllers/ClientesController.php';
require_once 'controllers/CursosController.php';

use App\ClientesController;
use App\CursosController;

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
      //Actualizar un curso
      if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "PUT") {
        $updateCourse = new CursosController();
        $updateCourse->update($routesArray[2]);
        return;
      }
      //Mostrar un solo curso
      if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "GET") {
        $showCourse = new CursosController();
        $showCourse->show($routesArray[2]);
        return;
      }
      if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "DELETE") {
        $deleteCourse = new CursosController();
        $deleteCourse->destroy($routesArray[2]);
        return;
      }
    }
    // Peticion GET mostrar todo los cursos
    if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "GET") {
      $showCourse = new CursosController();
      $showCourse->index();
    }
    //Crear un curso
    if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
      $saveCourse = new CursosController();
      $saveCourse->store();
    }
    break;
  case 'registros':
    if ($second_parameter_check && $routesArray[1] == 'registros') {
      $response['detalles'] = "Estoy en el registro {$routesArray[2]}";
      echo json_encode($response, true);
      return;
    }

    if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
      $createRecord = new ClientesController();
      $createRecord->store();
    }

    break;
  default:
    echo  json_encode($response, true);
    break;
}
