<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Alumnos</title>
</head>
<body>
    <h1>Listado de Alumnos</h1>

    <ul>
        @foreach($alumnos as $alumno)
            <li>{{ $alumno['id'] }} - {{ $alumno['nombre'] }}</li>
        @endforeach
    </ul>
</body>
</html>
