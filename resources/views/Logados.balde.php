<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Logados</title>
</head>
<body>
    <h2>Bienvenido a la vista de logados</h2>
    
    <!-- Mostrar un mensaje de éxito -->
    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <!-- Botón para cerrar sesión -->
    <a href="{{ route('logout') }}">Cerrar sesión</a>
</body>
</html>