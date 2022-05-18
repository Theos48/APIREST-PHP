<?php

namespace App;

class  ClientesController
{
  public function store()
  {
    $response['detalles'] = "Registro guardado";
    echo  json_encode($response, true);
    return;
  }
}
