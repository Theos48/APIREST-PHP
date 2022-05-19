<?php

namespace App;

use Conexion;
use \PDO;

class ClientesModels{
  static public function index($table){
    $stmt = Conexion::conn()->prepare("SELECT * FROM $table");
    $stmt->execute();
    return $stmt->fetchAll();
  }
}