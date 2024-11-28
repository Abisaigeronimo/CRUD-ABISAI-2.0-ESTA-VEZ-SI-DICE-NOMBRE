<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Mi Aplicación')</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

    <!-- Estilos Personalizados -->
    <style>
        body {
            background-color: #343a40; /* Color de fondo oscuro */
            color: #f8f9fa; /* Color del texto más claro */
            font-family: 'Poppins', sans-serif; /* Tipografía moderna */
        }
        .table {
            background-color: #495057; /* Color de fondo de la tabla */
        }
        .table th, .table td {
            color: #f8f9fa; /* Color del texto en la tabla */
        }
        .navbar {
            background-color: #007bff; /* Color azul para la barra de navegación */
        }
        .navbar a {
            color: white !important; /* Color blanco para los enlaces en la barra de navegación */
        }
        .btn-primary {
            background-color: #007bff; /* Color azul para los botones primarios */
            border-color: #007bff; /* Borde del botón primario */
        }
        h1, h2, h3, h4, h5, h6 {
            color: #e0e0e0; /* Colores más claros para los encabezados */
        }
        .alert {
            color: #343a40; /* Color del texto en alertas (más oscuro para contraste) */
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">Mi Aplicación</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('puestos.index') }}">Puestos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('puestos.create') }}">Crear Puesto</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div id="app">
    @yield('content')
</div>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

<!-- Inicializar DataTables -->
<script>
    $(document).ready(function() {
        $('.table').DataTable();
    });
</script>

</body>
</html>