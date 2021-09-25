<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\expedienteController;
use App\Http\Controllers\homeController;

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

Route::get('/', homeController::class);

Route::get('expedientes', [expedienteController::class, 'index'])->name('expedientes.index');

Route::get('expedientes/create', [expedienteController::class, 'create'])->name('expedientes.create');

Route::get('expedientes/{expte}', [expedienteController::class, 'show'])->name('expedientes.show');

