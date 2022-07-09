<?php

use App\Http\Controllers\EquipeController;
use App\Http\Controllers\FaleConoscoController;
use App\Http\Controllers\NoticiasController;
use App\Http\Controllers\QuemSomosController;
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

Route::get('/faleconosco', [FaleConoscoController::class, 'index']);

Route::get('/quemsomos', [QuemSomosController::class, 'index']);

Route::get('/equipe', [EquipeController::class, 'index']);

Route::get('/noticias', [NoticiasController::class, 'index']);
