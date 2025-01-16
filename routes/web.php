<?php

use App\Http\Controllers\DatosController;
use App\Http\Controllers\LibroController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hola/', function () {
    return 'hola';
});


Route::get('/usuario/{id}', function ($id) {
    return 'ID de Usuario: ' . $id;
    });

Route::get('/formulario', function(){
    return view('formulario');
});

Route::get('/formulario-libro', function(){
    return view('formulario-libro');
});

Route::post('/procesar-libros',[LibroController::class, 'insertarLibro']);


Route::post('/procesar-datos',[DatosController::class, 'procesar']);

Route::get('/ver-libros',[LibroController::class, 'verLibros']);
Route::get('/ver-libros',[LibroController::class, 'verLibros']);

Route::get('/eliminar-libro/{id}',[LibroController::class, 'eliminarLibro']);
Route::get('/actualizar-libro/{id}',[LibroController::class, 'mostratDatos']);
Route::post('/actualizar-libro/{id}',[LibroController::class, 'actualizarLibro']);

