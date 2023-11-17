<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicioneslad2dht;

class Grafica2Controller extends Controller
{
    public function obtenerDatosParaGrafica2()
    {
      
        header("Access-Control-Allow-Origin: *");

        $data = Medicioneslad2dht::select('fecha_hora_mlad2dht', 'ID_Medciones', 'temperatura_mlad2dht', 'humedad_mlad2dht', 'fecha_hora_mlad2dht')
          
            ->get();

        


            return response()->json($data);
           
    }


    public function obtenerDatosParaGraficaApi2()
    {
        
        $data = Medicioneslad2dht::select('fecha_hora_mlad2dht', 'ID_Medciones', 'temperatura_mlad2dht', 'humedad_mlad2dht', 'fecha_hora_mlad2dht')
            ->get();

        return response()->json($data);
    }
}
