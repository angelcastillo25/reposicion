<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Agregar proveedor</title>
  <!-- Incluye los estilos de Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-4">
  <div class="row">
    <div class="col-md-6">
      <h2>Agregar Proveedor</h2>
    </div>
  </div>

  <form method="POST" action={{route('proveedor.store')}}>
    @csrf
    @method('POST')
      <label for="descripcion">Nombre:</label>
      <input type="text" class="form-control" name="nombre" placeholder="Ingrese el nombre" required>
      <label for="stock">fecharegistro:</label>
      <input class="form-control" name="fecharegistro" placeholder="AAAA/MM/DD" required>
      <label for="stock">telefono:</label>
      <input type="number" class="form-control" name="telefono" placeholder="Ingrese el salario" required>
      <label for="precio">correo:</label>
      <input class="form-control" name="correo" placeholder="Ingrese el apellido" required>

    <div class="row">
      <div class="col-md-6">
        <button class="btn btn-primary">Guardar</button>
      </div>
      <div class="col-md-6 text-right">
        <a href={{route('proveedor.index')}} class="btn btn-secondary">Volver</a>
      </div>
    </div>
  </form>
</div>

</body>
</html>
