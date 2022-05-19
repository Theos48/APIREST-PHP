<?php
namespace App;

use Conexion;
use \PDO;

require_once 'Conexion.php';

class CursosModels{
  static public function index($table){
    $stmt = Conexion::conn()->prepare("SELECT * FROM $table");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_CLASS);
  }
}