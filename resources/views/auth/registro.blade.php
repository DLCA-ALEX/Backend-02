

@extends('layouts.app')

@section('content')
    <div class="flex items-center justify-center h-screen">
        <div class="max-w-md w-full">
            <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <form method="POST" action="/registro">
                @csrf
                <div class="mb-4">
                    <label for="nombre" class="block text-gray-700 text-sm font-bold mb-2">Nombre:</label>
                    <input type="text" name="nombre" id="nombre" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                </div>

                <div class="mb-4">
                    <label for="apellido_paterno" class="block text-gray-700 text-sm font-bold mb-2">Apellido Paterno:</label>
                    <input type="text" name="apellido_paterno" id="apellido_paterno" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                </div>

                <div class="mb-4">
                    <label for="apellido_materno" class="block text-gray-700 text-sm font-bold mb-2">Apellido Materno:</label>
                    <input type="text" name="apellido_materno" id="apellido_materno" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
                    <input type="email" name="email" id="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                </div>

                <div class="mb-4">
                    <label for="contraseña" class="block text-gray-700 text-sm font-bold mb-2">Contraseña:</label>
                    <input type="password" name="contraseña" id="contraseña" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                </div>

                <div class="mb-4">
                    <label for="confirmar_contraseña" class="block text-gray-700 text-sm font-bold mb-2">Confirmar Contraseña:</label>
                    <input type="password" name="confirmar_contraseña" id="confirmar_contraseña" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                </div>

               <input type="hidden" name="ID_rol" value="{{ $defaultValue }}">




                <div class="flex items-center justify-end">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Registrar</button>
                </div>
            </form>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('contraseña').addEventListener('input', function () {
            let password = this.value;
            let passwordLength = password.length;

            if (passwordLength >= 8) {
                this.setCustomValidity('');
            } else {
                this.setCustomValidity('La contraseña debe tener al menos 8 caracteres.');
            }
        });

        document.getElementById('confirmar_contraseña').addEventListener('input', function () {
            let password = document.getElementById('contraseña').value;
            let confirmPassword = this.value;

            if (password === confirmPassword) {
                this.setCustomValidity('');
            } else {
                this.setCustomValidity('Las contraseñas no coinciden.');
            }
        });
    </script>
@endsection
