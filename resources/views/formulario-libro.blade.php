@extends('layout')
@section('title','formulario-libros')
@section('content')
  <div class="container">
    <form class="m-1" method ="POST" action="/procesar-libros">
    @csrf
      <div class="form-group">
        <label for="titulo">Título</label>
        <input type="text" class="form-control" id="InputTitulo" aria-describedby="emailHelp" placeholder="titulo" name="titulo">
      </div>
      <div class="form-group">
        <label for="autor">Autor</label>
        <input type="text" class="form-control" id="InputAutor" aria-describedby="emailHelp" placeholder="Enter autor" name="autor">
      </div>
      <div class="form-group">
        <label for="ano">Año</label>
        <input type="number" class="form-control" id="InputAno" aria-describedby="emailHelp" placeholder="Enter año" name="anho">
      </div>
      <div class="form-group">
      <select class="form-select" aria-label="Default select example" name="genero">
        <option selected>ciencia-ficción</option>
        <option value="1">fantasía</option>
        <option value="2">salud</option>
        <option value="3">política</option>
      </select>
      </div>
      <div class="mb-3">
        <label for="descripcion" class="form-label">Descripción</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descripcion"></textarea>
    </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <a href="/ver-libros"><button class="btn btn-primary" >ver libros</button></a>
  </div>
@endsection