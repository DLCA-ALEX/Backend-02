<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Panel de Control</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');


    body {
      background-color: #f2f0f6;
      font-family: "Poppins", Sans-serif !important;
    }

    :root {

         --primary-color: #26c289;
      --secondary-color: rgb(39, 91, 247);
    }



    .sidebar {
      position: fixed;
      top: 0;
      left: 0;
      width: 250px;
      height: 100vh;
      background-color: var(--primary-color);
      color: #fff;
      padding: 20px;
      transition: transform 0.3s ease-in-out;
      box-shadow: 2px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .sidebar-logo {
      margin-bottom: 20px;
      text-align: center;
    }

    .sidebar-logo img {
      width: 120px;
    }

    .sidebar-menu {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .sidebar-menu-item {
      margin-bottom: 10px;
    }

    .sidebar-menu-link {
      display: block;
      color: #fff;
      text-decoration: none;
      transition: background-color 0.3s ease-in-out;
      padding: 10px;
      border-radius: 4px;
    }



    .content {
      padding: 20px;
      transition: margin-left 0.3s ease-in-out;
      background-color: #F2F0F6 !important;
    }

    .content-header {
      margin-bottom: 20px;
    }

    .content-title {
      font-size: 24px;
      font-weight: bold;
    }

    .table {
      background-color: #fff;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
      border-radius: 4px;
    }

    /* Estilos responsivos */
    @media (max-width: 576px) {
      .sidebar {
        display: none;
      }

      .content {
        padding-top: 80px;
      }

      .sidebar-toggle {
        display: none;
      }
    }

    @media (min-width: 576px) {
      .navbar-nav {
        display: none;
      }

      .content {
        padding-top: 20px;
        margin-left: 250px;
      }

      .sidebar-toggle {
        position: fixed;
        top: 50%;
        left: 0;
        width: 40px;
        height: 40px;
        background-color: var(--primary-color);
        color: #fff;
        text-align: center;
        line-height: 40px;
        cursor: pointer;
        transition: transform 0.3s ease-in-out;
        border-radius: 50%;
        box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
      }

      .sidebar-toggle i {
        transform: rotate(-180deg);
        transition: transform 0.3s ease-in-out;
      }

      .sidebar-toggle.collapsed i {
        transform: rotate(0deg);
      }

      .sidebar.collapsed {
        transform: translateX(-250px);
      }

      .content.collapsed {
        margin-left: 0;
      }
    }

    .fondo {
      background-color: #F2F0F6 !important;
    }

    .active {
      font-weight: 500;
      border-left: 5px solid #ffffff !important;

      color: white !important;
    }

    .if {
      color: white !important;
    }

    .dc {
      color: #C0C0C0 !important;
    }

    body {
      font-family: "Poppins", Sans-serif !important;
    }

    .container-fluid {
      padding-bottom: 20px;
      background-color: white !important;
      border-radius: 10px;
    }

    .white-box {
      background-color: transparent !important;
    }

    .btn-primary {
      background-color: #8165BD !important;
      border: none !important;
      margin-top: 32px;
      height: 38px;
    }

    .far.fa-times-circle {
      color: red;
      /* Cambia el color a rojo */
    }

    /* estilos tabla */
    table {
      width: 100% !important;
      background-color: white !important;
      /* Fondo blanco */
      border-collapse: collapse !important;
    }

    tbody td {
      border-bottom: none !important;
      /* Mantiene la línea de abajo solo en los títulos */
    }

    tr:nth-child(even) {
      background-color: #ffffff !important;
    }

    tr.col {
      background-color: white !important;
    }

    a {
      text-decoration: none;
      /* Elimina el subrayado */
      color: 000;
      /* Cambia el color del enlace (puedes usar cualquier otro color en hexadecimal o nombre de color) */
    }

    a:hover {
      text-decoration: none;
      /* Elimina el subrayado al pasar el cursor */
      color: #fff;
      /* Cambia el color del enlace cuando se pasa el cursor por encima (puedes usar cualquier otro color en hexadecimal o nombre de color) */
    }

    .sin a {
      text-decoration: none;
      /* Elimina el subrayado */
      color: #8165BD;
      /* Cambia el color del enlace (puedes usar cualquier otro color en hexadecimal o nombre de color) */
    }

    .pc {
      color: #000 !important;
    }

    .navbar-toggler-icon {
      color: black;
      /* Cambia el color del icono a negro */
      outline: none;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark bg fondo">
    <a class="navbar-brand no pc" href="#"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon">
        <i class="fas fa-bars"></i>
      </span>
    </button>
    <div class="collapse navbar-collapse" id="sidebarMenu">
      <ul class="navbar-nav ml-auto">
        <!-- <img src="logotipo-bechapra.png" class="logo" />-->
        <li class="nav-item">
          <a href="paneladmin.php" class="nav-link pc">
            <i> <img src="agregarblanco.png" width="15px"> </img>&nbsp;&nbsp;</i> Agregar shoper</a>
          </a>
        </li>
        <li class="nav-item">
          <a href="agrega_lugar.php" class="nav-link pc">
            <i class="fa fa-plus dc" aria-hidden="true"></i>Agregar restaurante
          </a>
        </li>
        <li class="nav-item">
          <a href="agrega_cliente.php" class="nav-link pc">
            <i class="fa fa-plus dc" aria-hidden="true">&nbsp;&nbsp;</i> Agregar cliente
          </a>
        </li>

        <li class="nav-item">
          <a href="validar.php" class="nav-link pc">
            <i class="far fa-file-alt dc" aria-hidden="true">&nbsp;&nbsp;</i> Evaluaciones
          </a>
        </li>

        <li class="nav-item">
          <a href="vistaadmin.php" class="nav-link pc">
            <i> <img src="Resultados.png" width="15px"> </img>&nbsp;&nbsp;</i>Resultados</a>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{ url('/logout') }}" class="nav-link pc">
            <i class="fas fa-sign-out-alt"></i> &nbsp;&nbsp;Cerrar sesion</a>
          </a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="sidebar">
    <div class="sidebar-logo">
      <img src="{{ asset('logo.png') }}" alt="Logo">
    </div>
    <ul class="sidebar-menu">
      <li class="sidebar-menu-item active">
        <a href="paneladmin.php" class="sidebar-menu-link " style="
    color: white;
">
          <i class="fa fa-plus dc" aria-hidden="true"></i> Administrar cuenta
        </a>
      </li>
      <li class="sidebar-menu-item ">
        <a href="{{ route('admin.sidebar') }}" class="sidebar-menu-link dc">
          <i class="fa fa-plus dc" aria-hidden="true"></i>Sensor mlad1dht
        </a>
      </li>
      <li class="sidebar-menu-item ">
        <a href="{{ route('admin.sensor2') }}"  class="sidebar-menu-link dc">
          <i class="fa fa-plus dc" aria-hidden="true"></i> Sensor mlad2dht
        </a>
      </li>
      <li class="sidebar-menu-item ">
        <a href="{{ route('admin.sensor3') }}"class="sidebar-menu-link dc">
          <i class="far fa-file-alt dc" aria-hidden="true"></i> Sensor mlad1ys69
        </a>
      </li>
      <li class="sidebar-menu-item ">
        <a href="{{ route('admin.sensor4') }}" class="sidebar-menu-link dc">
          <i> <img src="Resultados.png" width="15px"> </img>&nbsp;&nbsp;</i>Sensor mlad2ys69</a>
        </a>
      </li>
      <li class="sidebar-menu-item">
        <form id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
            <a href="#" class="sidebar-menu-link dc" onclick="document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt"></i> &nbsp;&nbsp;Cerrar sesión
            </a>
        </form>
    </li>
    
    </ul>
  </div>

  <div class="content">
    <div class="content-header">

    </div>

    <div class="content-body">
     



    <div class="container-fluid">
      <br>
    
@include('components.modals.edit-profile-modal')

      <div class="row">
        <div class="col-md-6">
           @if(session()->has('id_usuario'))
              <h4>Bienvenido: {{ $user->Nombre }} {{ $user->Apellido_paterno }} {{ $user->Apellido_materno}} </h4>
              <p>Nombre: {{ $user->Nombre }}</p>
              <p>Correo electrónico: {{ $user->Email }}</p>

              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editProfileModal">
                 Editar Perfil
              </button>
           @else
              <p>No hay usuario autenticado.</p>
           @endif
        </div>
        <div class="col-md-6">
           Hola
        </div>
     </div>




</div>

<br>

<div class="container-fluid">
  <h2>Listado de Usuarios</h2>

 >
  <input type="text" id="searchInput" placeholder="Buscar por nombre o correo">

  <table class="table" id="userTable">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Correo</th>
        <th>Rol</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      @foreach($users as $userItem)
        <tr>
          <td class="userName">{{ $userItem->Nombre }}</td>
          <td class="userEmail">{{ $userItem->Email }}</td>
          <td>{{ $userItem->ID_rol }}</td>
          <td>
            @if($userItem->id_usuario != session('id_usuario'))
             
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editUserModal{{ $userItem->id_usuario }}">
                Editar
              </button>
            @else
         
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editProfileModal">
                Editar Perfil
              </button>
            @endif
            <a href="{{ route('admin.deleteUser', ['id' => $userItem->id_usuario]) }}" class="btn btn-danger">Eliminar</a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>

<div class="sidebar-toggle" id="sidebarToggle">
  <i class="fas fa-chevron-left"></i>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<script>
  $(document).ready(function() {
    $("#sidebarToggle").click(function() {
      $(".sidebar").toggleClass("collapsed");
      $(".content").toggleClass("collapsed");
      $(this).toggleClass("collapsed");
    });
  });
</script>


<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
  $(document).ready(function () {
  
    $('#searchInput').on('input', function () {
      var searchText = $(this).val().toLowerCase();

      
      $('#userTable tbody tr').each(function () {
        var userName = $(this).find('.userName').text().toLowerCase();
        var userEmail = $(this).find('.userEmail').text().toLowerCase();

       
        if (userName.includes(searchText) || userEmail.includes(searchText)) {
          $(this).show();
        } else {
          $(this).hide();
        }
      });
    });
  });
</script>









</body>

</html>