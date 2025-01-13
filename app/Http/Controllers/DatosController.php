<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class DatosController extends Controller
{
    public function procesar(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required',
            'edad' => 'required|integer',
            ]);

        if($validated)
        {
           return view('validado',['validated'=>$validated]);
        }
        else
        {
            return view('novalido');
        }
    }
}
