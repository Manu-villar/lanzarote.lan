<?php

namespace App\Http\Controllers;
use App\Models\Libro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LibroController extends Controller
{
    function insertarLibro(Request $request)
    {
        $libro = new Libro();
        $data = [
            'titulo' => $request->titulo,
            'autor' => $request->autor,
            'anho' => $request->anho,
            'genero' => $request->genero,
        ];

        $rules = [
            'titulo' => 'required|string|max:255',
            'autor' => 'required|string|max:100',
            'anho' => 'required|int',
            'genero' => 'required',

        ];

        $validator = Validator::make($data, $rules);

        if ($validator->fails()) 
        {
            return response()->json([
                'message' => 'Los datos no son válidos',
                'errors' => $validator->errors()
            ], 400);
        }
        else
        {
            $libros = new Libro();
            $libros = Libro::all();
            return view('ver-libros', ['libros'=>$libros]);
        }

    }

    function verLibros()
    {
        $libros = Libro::all();
        return view('ver-libros', ['libros'=>$libros]);
       
    }

    


}
