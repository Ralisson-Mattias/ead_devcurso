<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\UsuariosController;
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

Route::get('/', [CursosController::class, 'index']);
Route::get('/cursos', [CursosController::class, 'index']);
Route::get('/curso/{id}', [CursosController::class, 'show_cursos']);
Route::get('/contato', [ContatoController::class, 'index']);

Route::get('/cadastro/cursos', [CursosController::class, 'cadastro']);
Route::post('/cadastro/cursos/salvar', [CursosController::class, "salvar_curso"])->name('salvar_curso');

Route::get('/cadastro/usuarios', [UsuariosController::class, 'cadastro']);
Route::post('/cadastro/usuarios/salvar', [UsuariosController::class, "salvar_usuario"])->name('salvar_usuario');
