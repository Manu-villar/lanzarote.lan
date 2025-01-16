@extends('layout')
@section('title','ver-libros')
@section('content')
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
            <td><a href="actualizar-libro/{{$libro->id}}" class="btn btn-warning">Actualizar</a></td>
            <td><a href="eliminar-libro/{{$libro->id}}" class="btn btn-danger">Delete</a></td>
            <td scope="row">{{$libro->titulo}}</td>
            <td>{{$libro->Autor}}</td>
            <td>{{$libro->anho}}</td>
            <td>{{$libro->genero}}</td>
        </tr>
    @endforeach
    </table>
  </div>
</div>
@endsection