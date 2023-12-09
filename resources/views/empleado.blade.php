<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Lista de Empleados</title>
  <!-- Incluye los estilos de Bootstrap (puedes enlazar a la CDN o descargar e incluir el archivo localmente) -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-4">
  <div class="row">
    <div class="col-md-6">
      <h2>Empleados</h2>
    </div>
    <div class="col-md-6 text-right">
      <a href={{route('empleado.agregar')}} class="btn btn-primary">Agregar Empleado</a>
    </div>
  </div>

  <div class="row mt-3">
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>FechaIngreso</th>
          <th>Salario</th>
        </tr>
      </thead>
      @foreach ($empleados as $producto)
      <tbody>
        <th>{{$producto->id}}</th>
        <td>{{$producto->nombre}}</td>
        <td>{{$producto->apellido}}</td>
        <td>{{$producto->fechaingreso}}</td>
        <td>{{$producto->salario}}</td>
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