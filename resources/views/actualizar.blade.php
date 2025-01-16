@extends('layout')
@section('title','ver-libros')
@section('content')

<div class="container">
    <form class="m-1" method ="POST" action="/actualizado/{id}">
    @csrf
      <div class="form-group">
        <label for="titulo">Título</label>
        <input type="text" class="form-control" id="InputTitulo" aria-describedby="emailHelp" placeholder="titulo" name="titulo" value="{{$libro->titulo}}">
      </div>
      <div class="form-group">
        <label for="autor">Autor</label>
        <input type="text" class="form-control" id="InputAutor" aria-describedby="emailHelp" placeholder="Enter autor" name="autor" value="{{$libro->Autor}}">
      </div>
      <div class="form-group">
        <label for="ano">Año</label>
        <input type="number" class="form-control" id="InputAno" aria-describedby="emailHelp" placeholder="Enter año" name="anho" value="{{$libro->anho}}">
      </div>
      <div class="form-group">
      <select class="form-select" aria-label="Default select example" name="genero" value="{{$libro->genero}}">
        <option value="ciencia-ficción"{{ $libro->genero == "ciencia-ficción" ? "selected" : ''}}>ciencia-ficción</option>
        <option value="fantasía"{{ $libro->genero == "fantasía" ? "selected" : ''}}>fantasía</option>
        <option value="salud"   {{ $libro->genero == "salud" ? "selected" : ''}}>salud</option>
        <option value="política"{{ $libro->genero == "politica" ? "selected" : ''}}>política</option>
      </select>
      </div>
      <div class="mb-3">
    </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <a href="/ver-libros"><button class="btn btn-primary" >ver libros</button></a>
</div>

@endsection