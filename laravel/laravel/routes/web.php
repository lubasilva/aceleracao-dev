<?php

use App\Http\Controllers\{AssinaturaController, DocumentoController, LoginController, UsuarioController};
use App\Models\Assinatura;
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
Route::get('documentos/novo', [DocumentoController::class, 'novo'])->name('documentos.novo');
Route::post('documentos/inserir', [DocumentoController::class, 'inserir'])->name('documentos.inserir');
Route::get('/documentos/{id}', [DocumentoController::class, 'showLog'])->name('showLog');

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('assinaturas', [AssinaturaController::class, 'index'])->name('assinatura.index');
Route::get('assinaturas/novo', [AssinaturaController::class, 'novo'])->name('assinatura.novo');
Route::post('assinaturas/inserir', [AssinaturaController::class, 'inserir'])->name('assinatura.inserir');
Route::delete('assinaturas/remover/{id}', [AssinaturaController::class, 'remover'])->name('assinatura.remover');
Route::get('assinaturas/{id}', [AssinaturaController::class, 'show'])->name('assinatura.show');

Route::middleware('valdiapermissao')->group(function(){
    Route::delete('documentos/remover/{id}', [DocumentoController::class, 'remover'])->name('documentos.remover');
});
