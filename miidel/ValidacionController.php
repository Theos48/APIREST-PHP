<?

namespace App;

class ValidacionController
{

  static function validateEmail($email)
  {
    $response = array(
      'status' => 200,
      'detalles' => 'Registro guardado',
    );

    if (filter_var($email, FILTER_VALIDATE_EMAIL && isset($email))) {
      return [true, $response];
    } else {
      $response['status'] = 404;
      $response['detalles'] = "El email {$email} no es valido";
      return [false, $response];
    }
  }

  static function validateString($string)
  {
    $response = array(
      'status' => 200,
      'detalles' => 'Registro guardado',
    );
    if (isset($string)) {
      return [true, $response];
    } else {
      $response['status'] = 404;
      $response['detalles'] = "El input {$string} no es valido";
      return [false, $response];
    }
  }
}
?>