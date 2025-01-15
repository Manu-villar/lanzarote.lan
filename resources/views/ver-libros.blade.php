<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
<div class="container">
    <table class="table bg">
    <thead>
        <tr>
        <th>Actualizar</th>
        <th>Eliminar</th>
        <th scope="col">Título</th>
        <th scope="col">Autor</th>
        <th scope="col">Año</th>
        <th scope="col">Género</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($libros as $libro)
        <tr>
        <td><button type="button" class="btn btn-warning">Update</button></td>
        <td><button type="button" class="btn btn-danger">Delete</button></td>
        <td scope="row">{{$libro->titulo}}</td>
        <td>{{$libro->Autor}}</td>
        <td>{{$libro->anho}}</td>
        <td>{{$libro->genero}}</td>
        </tr>
        @endforeach
    </table>
    <a href="/formulario-libro"><button class="btn btn-primary" >Alta libro</button></a>
  </div>
</div>
</body>
</html>