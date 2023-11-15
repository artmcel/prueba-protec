<?php

namespace App\Http\Controllers;

use App\Models\CreaEntradas;
use Illuminate\Http\Request;

class AltaEntradaController extends Controller
{
    //

    public function index(){
        return view('crear');
    }

    public function guardar( Request $request ){

        $validaciones = $request->validate([
            'titulo' => 'required',
            'autor' => 'required',
            'fecha_publicacion' => 'required',
            'contenido' => 'required'
        ]);

        //print_r($request->all());

        $crearEntrada = new CreaEntradas();
        $crearEntrada->titulo = $request->titulo;
        $crearEntrada->autor = $request->autor;
        $crearEntrada->fecha_publicacion = $request->fecha_publicacion;
        $crearEntrada->contenido = $request->contenido;
        $crearEntrada->save();

        return redirect('/crear-entradas')->with('status', 'Entrada guardada');


    }
}
