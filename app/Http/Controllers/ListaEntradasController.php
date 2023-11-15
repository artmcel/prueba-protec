<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListaEntradasController extends Controller
{

    public function index(){
        $entradas = DB::table('entradas')->
        select('titulo', 'autor', DB::raw('SUBSTRING(fecha_publicacion, 1, 10) AS fecha_publicacion'), DB::raw('SUBSTRING(contenido, 1, 70) AS contenido'))
        ->get();
        return view('ver', ['entradas'=>$entradas]);

    }

}
