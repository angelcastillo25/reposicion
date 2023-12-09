<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Agregar Producto</title>
  <!-- Incluye los estilos de Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-4">
  <div class="row">
    <div class="col-md-6">
      <h2>Agregar Producto</h2>
    </div>
  </div>

  <form method="POST" action={{route('producto.store')}}>
    @csrf
    @method('POST')
      <label for="descripcion">Descripción:</label>
      <input type="text" class="form-control" name="descripcion" placeholder="Ingrese la descripción" required>
      <label for="precio">Precio:</label>
      <input type="number" class="form-control" name="precio" placeholder="Ingrese el precio" required>
      <label for="stock">Stock:</label>
      <input type="number" class="form-control" name="stock" placeholder="Ingrese el stock" required>
      <label for="pagaisv">¿Paga IVA?</label>
      <select class="form-control" name="pagaisv" required>
        <option value="si">Sí</option>
        <option value="no">No</option>
      </select>

    <div class="row">
      <div class="col-md-6">
        <button class="btn btn-primary">Guardar</button>
      </div>
      <div class="col-md-6 text-right">
        <a href={{route('producto.index')}} class="btn btn-secondary">Volver</a>
      </div>
    </div>
  </form>
</div>

</body>
</html>
