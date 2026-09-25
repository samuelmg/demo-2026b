<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi horóscopo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <h1>Mi horóscopo</h1>
    <form action="recibe-formulario" method="POST">
        <div class="mb-3>"
            <label for="nombre" class="form-label">
                Nombre:
                <input type="text" id="nombre" class="form-control" name="nombre">
            </label>
        </div>

        <div class="mb-3>"
            <label for="correo" class="form-label">Correo:</label>
            <input type="email" name="correo" id="correo" class="form-control">
        </div>

        <div class="mb-3>"
            <label for="fecha_nacimiento" class="form-label">Fecha de Nacimiento:</label>
            <input type="date" name="fecha_nacimiento" class="form-control" id="fecha_nacimiento">
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
        <!-- <input type="submit" value="Enviar con input"> -->
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
