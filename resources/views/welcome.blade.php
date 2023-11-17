<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invernadero Inteligente</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            color: #495057;
            font-family: 'Arial', sans-serif;
        }

        .navbar {
            background-color: #26c289;
            color: #fff;
        }

        .jumbotron {
            background-color: #26c289;
            color: #fff;
            text-align: center;
        }

        .card {
            margin: 20px 0;
        }

        .card-header {
            background-color: #26c289;
            color: #fff;
        }

        .btn-primary {
            background-color: #26c289;
            border-color: #26c289;
        }

        .btn-primary:hover {
            background-color: #218c74;
            border-color: #218c74;
        }


        .nav-link{
            color: #fff;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#">Invernadero Inteligente</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Iniciar Sesión</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('registro') }}">Registrarse</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Jumbotron - Encabezado de la Página -->
    <div class="jumbotron">
        <h1 class="display-4">Bienvenido al Invernadero Inteligente</h1>
        <p class="lead">Optimizando el cultivo con tecnología avanzada.</p>
    </div>

    <!-- Contenido principal -->
    <div class="container">
        <div class="row">
            <!-- Card 1: Estado del Invernadero -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Estado del Invernadero
                    </div>
                    <div class="card-body">
                        <!-- Contenido aquí -->
                        <p class="card-text">Temperatura: XX °C</p>
                        <p class="card-text">Humedad: XX %</p>
                    </div>
                </div>
            </div>

            <!-- Card 2: Control de Dispositivos -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Control de Dispositivos
                    </div>
                    <div class="card-body">
                        <!-- Contenido aquí -->
                        <p class="card-text">Luces: Encendidas</p>
                        <p class="card-text">Riego: Automático</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card 3: Información Adicional -->
        <div class="card">
            <div class="card-header">
                Información Adicional
            </div>
            <div class="card-body">
                <!-- Contenido aquí -->
                <p class="card-text">Próximo Riego: XX/XX/XXXX</p>
                <p class="card-text">Próxima Cosecha: XX/XX/XXXX</p>
            </div>
        </div>

        <!-- Call to Action - Invitación a Conocer Más -->
        <div class="jumbotron text-center">
            <h2 class="display-5">Descubre más sobre nuestro invernadero inteligente</h2>
            <p class="lead">Mejora la eficiencia y resultados de tu cultivo con nuestra tecnología avanzada.</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Conoce más</a>
        </div>
    </div>

    <!-- Script de Bootstrap y jQuery (asegúrate de tener una conexión a Internet para cargar estos scripts) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
