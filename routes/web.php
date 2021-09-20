<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('Inicio/{id}', function () {
    return "Bienvenido a G-Expedientes";

});

Route::get('Expedientes/create', function () {
    return "En esta sección podrá cargar un nuevo expediente";
});

Route::get('Expedientes/expte', function ($expte) {
    return "Ud. esta consultando el expte: $expte";
});
