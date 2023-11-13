<?php



// app/Http/Controllers/CustomAuthController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\Models\Usuario; // Asegúrate de importar tu modelo de usuario

class CustomAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('custom-login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        // Realiza tu propia lógica de autenticación personalizada aquí
        $user = Usuario::where('email', $credentials['email'])->first();

        if ($user && $this->checkPassword($credentials['password'], $user->Contraseña)) {
            // Autenticación exitosa
            // Puedes guardar información de autenticación personalizada aquí si es necesario
            return redirect()->intended('/home'); // Cambia la ruta según tus necesidades
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function logout(Request $request)
    {
        Session::forget('ID_rol');  // Elimina la variable de sesión del rol

        // Lógica de cierre de sesión adicional si es necesario

        return redirect('/');
    }

    // Ejemplo de función para verificar la contraseña
    private function checkPassword($inputPassword, $storedPassword)
    {
        // Lógica para verificar la contraseña, por ejemplo, mediante password_verify
        return password_verify($inputPassword, $storedPassword);
    }
}
