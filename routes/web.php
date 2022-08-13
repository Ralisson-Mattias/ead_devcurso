<?php

use App\Http\Controllers\AulasController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\PaginaInicialController;
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

Route::get('/', [PaginaInicialController::class, 'index']);
Route::get('/aulas', [AulasController::class, 'index']);
Route::get('/contato', [ContatoController::class, 'index']);
