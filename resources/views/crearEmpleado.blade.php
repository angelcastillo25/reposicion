<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Agregar Empleado</title>
  <!-- Incluye los estilos de Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-4">
  <div class="row">
    <div class="col-md-6">
      <h2>Agregar Empleado</h2>
    </div>
  </div>

  <form method="POST" action={{route('empleado.store')}}>
    @csrf
    @method('POST')
      <label for="descripcion">Nombre:</label>
      <input type="text" class="form-control" name="nombre" placeholder="Ingrese el nombre" required>
      <label for="precio">Apellido:</label>
      <input class="form-control" name="apellido" placeholder="Ingrese el apellido" required>
      <label for="stock">fechaingreso:</label>
      <input class="form-control" name="fechaingreso" placeholder="AAAA/MM/DD" required>
      <label for="stock">Salario:</label>
      <input type="number" class="form-control" name="salario" placeholder="Ingrese el salario" required>

    <div class="row">
      <div class="col-md-6">
        <button class="btn btn-primary">Guardar</button>
      </div>
      <div class="col-md-6 text-right">
        <a href={{route('empleado.index')}} class="btn btn-secondary">Volver</a>
      </div>
    </div>
  </form>
</div>

</body>
</html>