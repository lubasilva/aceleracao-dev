<?php

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(['namespace' => 'App\Http\Controllers\Api'], function(){

    Route::post('/login', 'LoginApiController@login')->name('login');



    Route::group(["middleware" => "jwt.auth"], function(){
        Route::apiResource('/documentos', 'DocumentoController');
        Route::apiResource('/assinaturas', 'AssinaturaController');
        Route::apiResource('/analises', 'AnaliseController');
        Route::apiResource('/relatorios', 'RelatorioDeAnaliseController');

        Route::get('/logout', 'LoginApiController@logout')->name('logout');
        Route::get('/refresh', 'LoginApiController@refresh')->name('refresh');
    });
});

