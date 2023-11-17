<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicioneslad1dht;

class GraficaController extends Controller
{
    public function obtenerDatosParaGrafica()
    {
        header("Access-Control-Allow-Origin: *");

        $data = Medicioneslad1dht::select('fecha_hora_mlad1dht', 'ID_Medciones', 'temperatura_mlad1dht', 'humedad_mlad1dht', 'fecha_hora_mlad1dht')
          
            ->get();

        


            return response()->json($data);
           
    }


    
    public function obtenerDatosParaGraficaApi()
    {
        
        $data = Medicioneslad1dht::select('fecha_hora_mlad1dht', 'ID_Medciones', 'temperatura_mlad1dht', 'humedad_mlad1dht', 'fecha_hora_mlad1dht')
            ->get();

        return response()->json($data);
    }
}
