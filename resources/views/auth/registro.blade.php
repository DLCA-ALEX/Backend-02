<!-- resources/views/auth/registro.blade.php -->

@extends('layouts.app')

@section('content')
    <form method="POST" action="/registro">
        @csrf
        <!-- Campos del formulario (Nombre, Apellido, Email, Contraseña, etc.) -->
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required>

        <label for="apellido_paterno">Apellido Paterno:</label>
        <input type="text" name="apellido_paterno" required>

        <label for="apellido_materno">Apellido Materno:</label>
        <input type="text" name="apellido_materno" required>

        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <label for="contraseña">Contraseña:</label>
        <input type="password" name="contraseña" required>

        <label for="ID_rol">Rol:</label>
           <select name="ID_rol">
             <option value="1">Rol 1</option>
            <option value="2">Rol 2</option>
    <!-- Opciones adicionales según tus necesidades -->
           </select>
 

        <!-- Otros campos del formulario -->

        <button type="submit">Registrar</button>
    </form>
@endsection
