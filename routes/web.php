<?php

use App\Http\Controllers\DatosController;
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

Route::post('/procesar-datos',[DatosController::class, 'procesar']);

Route::get('/formulario-libro', function(){
    return view('formulario-libro');
});
