 <?php
  class Conexion
  {
    static public function conn()
    {
      $conn = new PDO("mysql:host=localhost;dbname=apirest", "admin", "admin");
      echo "Connected successfully.";
      $conn->exec("set name utf8");
      return $conn;
    }
  }
