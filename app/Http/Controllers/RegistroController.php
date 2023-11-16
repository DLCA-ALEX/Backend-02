<?php

// app/Http/Controllers/RegistroController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

use Carbon\Carbon; 

class RegistroController extends Controller
{
    public function mostrarFormulario()
    {

        $defaultValue = 2;
        return view('auth.registro', compact('defaultValue'));
    }

    public function registrarUsuario(Request $request)
    {
        
        $ID_rol = $request->input('ID_rol');
        $inputPassword = $request->input('contraseña');
        $hashedPassword = Hash::make($inputPassword);
    
        if (Hash::check($inputPassword, $hashedPassword)) {
            Log::info('Contraseña válida');
        } else {
            Log::info('Contraseña inválida');
        }
    
        $nuevoUsuario = Usuario::create([
            'Nombre' => $request->input('nombre'),
            'Apellido_paterno' => $request->input('apellido_paterno'),
            'Apellido_materno' => $request->input('apellido_materno'),
            'Email' => $request->input('email'),
            'Contraseña' => $hashedPassword,
            'Días' => Carbon::now(),
            'ID_rol' => $ID_rol,
            
        ]);
    
       
        return redirect('/login'); 
    }


    
    
}
