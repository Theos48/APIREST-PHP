<?php
require 'controllers/RoutesController.php';
use App\RoutesController;


$rutas = new RoutesController();

$rutas->index();
