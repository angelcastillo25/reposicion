<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Lista de Productos</title>
  <!-- Incluye los estilos de Bootstrap (puedes enlazar a la CDN o descargar e incluir el archivo localmente) -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-4">
  <div class="row">
    <div class="col-md-6">
      <h2>Productos</h2>
    </div>
    <div class="col-md-6 text-right">
      <a href={{route('producto.agregar')}} class="btn btn-primary">Agregar Producto</a>
    </div>
  </div>

  <div class="row mt-3">
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Descripción</th>
          <th>Precio</th>
          <th>Stock</th>
          <th>Paga IVA</th>
        </tr>
      </thead>
      @foreach ($productos as $producto)
      <tbody>
        <th>{{$producto->id}}</th>
        <td>{{$producto->descripcion}}</td>
        <td>{{$producto->precio}}</td>
        <td>{{$producto->stock}}</td>
        <td>{{$producto->pagaisv}}</td>
      </tbody>
      @endforeach
    </table>
  </div>
</div>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>

