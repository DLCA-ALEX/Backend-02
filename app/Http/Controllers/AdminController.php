<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class AdminController extends Controller
{
    public function index()
    {
        $users = Usuario::all();
        $userId = session('id_usuario');
        $user = Usuario::find($userId);
    
        return view('admin.index', compact('user', 'users'));
    }

    public function edit(Request $request)
    {
        $userId = session('id_usuario');
        $user = Usuario::find($userId);

        if ($user) {
           
            $user->update([
                'Nombre' => $request->input('nombre'),
                'Email' => $request->input('email'),
                
            ]);

           
            return redirect()->route('admin.index')->with('success', 'Perfil actualizado exitosamente.');
        }

      
        return redirect()->route('admin.index')->with('error', 'No se pudo encontrar al usuario.');
    }

   
    public function editUser(Request $request, $id)
    {
        $user = Usuario::find($id);

        if ($user) {
           
            $user->update([
                'Nombre' => $request->input('nombre'),
                'Email' => $request->input('email'),
                'ID_rol' => $request->input('ID_rol'),
                
            ]);

       
            return redirect()->route('admin.index')->with('success', 'Usuario actualizado exitosamente.');
        }


        return redirect()->route('admin.index')->with('error', 'No se pudo encontrar al usuario.');
    }


public function deleteUser($id)
{
    $user = Usuario::find($id);
    
    if ($user) {
       
        $user->delete();
        return redirect()->route('admin.index')->with('success', 'Usuario eliminado exitosamente.');
    }

    return redirect()->route('admin.index')->with('error', 'No se pudo encontrar al usuario.');
}

}
