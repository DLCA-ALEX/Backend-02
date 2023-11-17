<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



use App\Http\Controllers\GraficaController;
use App\Http\Controllers\Grafica2Controller;
use App\Http\Controllers\Grafica3Controller;
use App\Http\Controllers\Grafica4Controller;
Route::get('/datos-para-grafica', [GraficaController::class, 'obtenerDatosParaGraficaApi']);

Route::get('/datos-para-grafica2', [Grafica2Controller::class, 'obtenerDatosParaGraficaApi2']);
Route::get('/datos-para-grafica3', [Grafica3Controller::class, 'obtenerDatosParaGraficaApi3']);
Route::get('/datos-para-grafica4', [Grafica4Controller::class, 'obtenerDatosParaGraficaApi4']);
