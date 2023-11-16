<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\GraficaController;
use App\Http\Controllers\Grafica2Controller;
use App\Http\Controllers\Grafica3Controller;
use App\Http\Controllers\Grafica4Controller;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/registro', [RegistroController::class, 'mostrarFormulario']);
Route::post('/registro', [RegistroController::class, 'registrarUsuario']);

Route::prefix('admin')->middleware(['admin'])->group(function () {
    Route::get('/index', [AdminController::class, 'index'])->name('admin.index');

    Route::get('/sidebar', function () {
        return view('admin.sidebar');
    })->name('admin.sidebar');

    Route::get('/sensor2', function () {
        return view('admin.vista2');
    })->name('admin.sensor2');

    Route::get('/sensor3', function () {
        return view('admin.vista3');
    })->name('admin.sensor3');

    Route::get('/sensor4', function () {
        return view('admin.vista4');
    })->name('admin.sensor4');

    Route::post('/admin/edit', [AdminController::class, 'edit'])->name('admin.edit');
    Route::post('/admin/edit/{id}', [AdminController::class, 'editUser'])->name('admin.editUser');
    Route::get('/admin/index', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/admin/delete-user/{id}', [AdminController::class, 'deleteUser'])->name('admin.deleteUser');
});

Route::get('/user/dashboard/', [UserController::class, 'dashboard'])
    ->middleware('user')
    ->name('user.dashboard');


Route::get('/login', [CustomAuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [CustomAuthController::class, 'login']);
Route::post('/logout', [CustomAuthController::class, 'logout'])->name('logout');








Route::get('/obtener-datos-grafica', [GraficaController::class, 'obtenerDatosParaGrafica']);


Route::get('/obtener-datos-grafica2', [Grafica2Controller::class, 'obtenerDatosParaGrafica2']);




Route::get('/obtener-datos-grafica3', [Grafica3Controller::class, 'obtenerDatosParaGrafica3']);



Route::get('/obtener-datos-grafica4', [Grafica4Controller::class, 'obtenerDatosParaGrafica4']);

