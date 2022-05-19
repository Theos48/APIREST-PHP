<?php

namespace App;

// use App\ValidacionController;

class  ClientesController
{
  public function store($data)
  {
    $response = array(
      'status' => 200,
      'detalles' => 'Registro guardado',
    );
    if (empty($data['nombre'])) {
      $response['status'] = 404;
      $response['detalles'] = 'Campo nombre vacio';
      echo json_encode($response);
      return;
    }

    //validacion de emal repetido
    $clientes = ClientesModels::index("clientes");

    foreach ($clientes as $key => $value) {
      if ($value['email'] == $data['email']) {
        $response['status'] = 404;
        $response['detalles'] = 'Email ya existe';
        echo json_encode($response);
        return;
      }
    }

    echo json_encode($response);


    return;

    // $validation = new ValidacionController();
    // [$isEmailValidate, $responseEmail] = $validation->validateEmail($data['email']);
    // [$isNameValidate, $responseName] = ValidacionController::validateString($data['nombre']);
    // [$isLastNameValidate, $responseName] = ValidacionController::validateString($data['apellido']);

    // if(!$isEmailValidate || !$isNameValidate || !$isLastNameValidate){
    //   $response['status'] = 404;
    //   $response['detalles'] += $responseEmail['status'] == 404 ? $responseEmail['detalles'] : '';
    //   $response['detalles'] += $responseName['status'] == 404 ? $responseEmail['detalles'] : '';
    //   $response['detalles'] += $responseName['status'] == 404 ? $responseEmail['detalles'] : '';
    //   echo  json_encode($response, true);
    //   return;
    // }
    // $response['status'] = 200;
    // $response['detalles'] = 'Los registros son correctos';
    // echo  json_encode($response, true);
    // return;
  }
}
