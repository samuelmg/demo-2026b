<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Detalle</title>
</head>
<body
    <h1>Detalle del registro</h1>
    <a href="{{ route('informacion-personal.index') }}" class="btn btn-primary mb-3">Regresar a la lista</a>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Nombre: {{ $informacionPersonal->nombre }}</h5>
                <p class="card-text">Correo: {{ $informacionPersonal->correo }}</p>
                <p class="card-text">Fecha de nacimiento: {{ $informacionPersonal->fecha_nacimiento }}</p>
            </div>
        </div>
    </div>
    <hr>
    <a href="{{ route('informacion-personal.edit', $informacionPersonal->id) }}" class="btn btn-warning">
        Editar
    </a>

    <form action="{{ route('informacion-personal.destroy', $informacionPersonal) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">
            Eliminar
        </button>
    </form>
</body>
</html>