<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListaEntradasController extends Controller
{

    public function index(){
        $entradas = DB::table('entradas')->
        select('id','titulo', 'autor', DB::raw('SUBSTRING(fecha_publicacion, 1, 10) AS fecha_publicacion'), DB::raw('SUBSTRING(contenido, 1, 70) AS contenido'))
        ->get();
        return view('ver', ['entradas'=>$entradas]);

    }

    public function buscar( Request $request ){

        $buscar = DB::table('entradas')
                ->select('id', 'titulo', 'autor', 'contenido', 'fecha_publicacion')    
                -> where('titulo' ,'like','%'.$request->input('buscar').'%', 'OR', 
                'autor' ,'like','%'.$request->input('buscar').'%', 'OR',
                'contenido' ,'like','%'.$request->input('buscar').'%')
                ->get();

        if($buscar->isEmpty()){
            //print_r('vacio');
            return redirect('ver-entradas')->with('resultado', 'vacio');

        }
        return view('ver', ['entradas' => $buscar]);


    }

}
