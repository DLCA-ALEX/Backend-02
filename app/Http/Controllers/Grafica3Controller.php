<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicioneslad1ys69;

class Grafica3Controller extends Controller
{
    public function obtenerDatosParaGrafica3()
    {

        header("Access-Control-Allow-Origin: *");

        $data = Medicioneslad1ys69::select('fecha_hora_mlad1ys69', 'id_medicioneslad1ys69', 'temperatura_mlad1ys69', 'humedad_mlad1ys69')
          
            ->get();

        


            return response()->json($data);
           
    }
}