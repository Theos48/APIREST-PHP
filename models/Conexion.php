 <?php
  class Conexion
  {
    static public function conn()
    {
      $conn = new PDO("mysql:host=localhost;dbname=apirest", "root", "");
      $conn->exec("set names utf8");
      return $conn;
    }
  }
