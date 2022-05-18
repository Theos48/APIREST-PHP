<?php

namespace App;

class  CursosController
{
  // Mostrar cursos
  public function index()
  {
    $cursos = CursosModels::index('cursos');
    $response['status'] = 200;
    $response['total_registro'] = count($cursos);
    $response['detalles'] = $cursos;
    echo  json_encode($response, true);
    return;
  }

  // Creacion de curso
  public function store()
  {
    $response['detalles'] = "Crear un curso";
    echo  json_encode($response, true);
    return;
  }

  public function update($id)
  {
    $response['detalles'] = "Registro con id {$id} actualizado";
    echo  json_encode($response, true);
    return;
  }

  public function show($id)
  {
    $response['detalles'] = "Registro con id {$id} mostrado";
    echo  json_encode($response, true);
    return;
  }

  public function destroy($id)
  {
    $response['detalles'] = "Registro con id {$id} fue eliminado";
    echo  json_encode($response, true);
    return;
  }
}
