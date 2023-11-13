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
        return view('auth.registro');
    }

    public function registrarUsuario(Request $request)
    {
        // Lógica para validar y crear el usuario
        $ID_rol = $request->input('ID_rol');
        $inputPassword = $request->input('contraseña');
        $hashedPassword = Hash::make($inputPassword);
    
        // Validación directa de la contraseña antes de almacenarla
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
            // Otros campos...
        ]);
    
        // Autenticar al usuario recién creado
    
        // Redirigir a la página adecuada después de registrar e iniciar sesión
        return redirect('/login'); // Ajusta según tus necesidades
    }
    
    
}
