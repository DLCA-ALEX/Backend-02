<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;

class CustomAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('custom-login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
    
        // Buscar al usuario en la base de datos
        $user = Usuario::where('email', $credentials['email'])->first();
    
        // Verificar si el usuario existe y si la contraseña es válida
        if ($user && Hash::check($credentials['password'], $user->Contraseña)) {
            // Autenticación exitosa
            // Almacena el ID_rol en la sesión
            $request->session()->put('id_usuario', $user->id_usuario);
            $request->session()->put('ID_rol', $user->ID_rol);
    
            if ($user->ID_rol == 1) {
                return redirect('/admin/index');
            } else {
                return redirect('/user/index');
            }
        }
    
        // Autenticación fallida
        return back()->withErrors(['email' => 'Invalid credentials']);
    }
    

    public function logout(Request $request)
    {
        
        auth()->logout();
    
        
        $request->session()->invalidate();
    

        $request->session()->regenerateToken();
    
       
        return redirect('/');
    }
    
}
