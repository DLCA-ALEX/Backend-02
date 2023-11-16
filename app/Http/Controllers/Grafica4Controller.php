<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicioneslad2ys69;

class Grafica4Controller extends Controller
{
    public function obtenerDatosParaGrafica4()
    {
  
        header("Access-Control-Allow-Origin: *");

        $data = Medicioneslad2ys69::select('fecha_hora_mlad2ys69', 'id_medicioneslad2ys69', 'temperatura_mlad2ys69', 'humedad_mlad2ys69')
          
            ->get();

        


            return response()->json($data);
           
    }
}