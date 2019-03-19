<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Sinesp;

class PlacasController extends Controller
{
  public function buscarPlaca($placa) {
    $veiculo = new Sinesp();

      try {
          // $veiculo->proxy('200.170.220.218', '8080');
          // $veiculo->timeout(25); // tempo em segundos

          $veiculo->buscar($placa);

          if ($veiculo->existe()) {
            return $veiculo->dados();
          }

      } catch (\Exception $e) {
          echo $e->getMessage();
      }
	}
}
