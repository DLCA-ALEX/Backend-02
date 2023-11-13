<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
      public function dashboard()
    {
        // Lógica de la vista de administrador
        return view('admin.dashboard');
    }
}
