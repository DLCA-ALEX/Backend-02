<?php





namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\Models\Usuario; 

class CustomAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('custom-login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        
        $user = Usuario::where('email', $credentials['email'])->first();

        if ($user && $this->checkPassword($credentials['password'], $user->Contraseña)) {

            return redirect()->intended('/home'); 
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function logout(Request $request)
    {
        Session::forget('ID_rol');  


        return redirect('/');
    }


    private function checkPassword($inputPassword, $storedPassword)
    {
        
        return password_verify($inputPassword, $storedPassword);
    }
}
