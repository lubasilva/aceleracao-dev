<?php

use App\Http\Controllers\{AssinaturaController, DocumentoController, UsuarioController};
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


Route::get('/perfil', [UsuarioController::class, 'index'])->name('perfil');

Route::get('/documentos', [DocumentoController::class, 'index'])->name('documentos');
Route::get('/documentos/{id}', [DocumentoController::class, 'showLog'])->name('showLog');

Route::get('assinaturas', [AssinaturaController::class, 'index'])->name('assinatura.index');
Route::get('assinaturas/{id}', [AssinaturaController::class, 'show'])->name('assinatura.show');
