<?php

use App\Http\Controllers\AltaEntradaController;
use App\Http\Controllers\ListaEntradasController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Route::get('/', function () {
    return view('welcome');
}); */

//Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/ver-entradas', [ListaEntradasController::class, 'index']);
Route::post('/buscar', [ListaEntradasController::class, 'buscar']);
Route::get('/entrada/{id}', [ListaEntradasController::class, 'buscarEntrada']);
Route::get('/crear-entradas', [AltaEntradaController::class, 'index']);
Route::post('/guarda-entrada', [AltaEntradaController::class, 'guardar']);
