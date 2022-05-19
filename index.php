<?php
require_once 'controllers/RoutesController.php';
require_once 'controllers/CursosController.php';
require_once 'controllers/ClientesController.php';
// require_once 'controllers/ValidacionController.php';


require_once 'models/ClientesModels.php';
require_once 'models/CursosModels.php';

use App\RoutesController;



$rutas = new RoutesController();
$rutas->index();
