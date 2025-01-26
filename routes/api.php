<?php

use App\Http\Controllers\V1\MarcaController;
use App\Http\Controllers\V1\CorController;
use App\Http\Controllers\V1\ProdutoController;
use App\Http\Controllers\V1\CategoriaController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'v1', 'namespace' => 'App\Http\Controllers\V1'], function () {
    Route::get('/', function () {
        return view('welcome');
    });

    Route::apiResource('produtos', ProdutoController::class);
    Route::apiResource('cores', CorController::class);
    Route::apiResource('marcas', MarcaController::class);
    Route::apiResource('categorias', CategoriaController::class);
});
