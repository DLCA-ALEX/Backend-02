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
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\RegistroController;

Route::get('/registro', [RegistroController::class, 'mostrarFormulario']);
Route::post('/registro', [RegistroController::class, 'registrarUsuario']);


use App\Http\Controllers\AdminController;

use App\Http\Controllers\CustomAuthController;


// Rutas para la vista de administrador
Route::get('/admin/dashboard/', [AdminController::class, 'dashboard'])
    ->middleware('admin')
    ->name('admin.dashboard');

// Rutas para la vista de usuario
Route::get('/user/dashboard/', [UserController::class, 'dashboard'])
    ->middleware('user')
    ->name('user.dashboard');

// Elimina 'auth' middleware de estas rutas
Route::get('/login', [CustomAuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [CustomAuthController::class, 'login']);
Route::post('/logout', [CustomAuthController::class, 'logout'])->name('logout');
