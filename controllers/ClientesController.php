<?php

namespace App;

class  ClientesController
{
  public function store($data)
  {
    $response['detalles'] = "Registro guardado";
    echo  json_encode($data, true);
    return;
  }
}
