<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PessoaController;
use App\Http\Controllers\ContatoController;

Route::prefix('pessoa')->group(function () {
    Route::get('/all', [PessoaController::class, 'all']);
    Route::post('/create', [PessoaController::class, 'create']);
    Route::post('/update', [PessoaController::class, 'update']);
    Route::get('/view/{id}', [PessoaController::class, 'view']);
    Route::post('/delete', [PessoaController::class, 'delete']);
    Route::post('/byNome', [PessoaController::class, 'byNome']);
});

Route::prefix('contato')->group(function () {
    Route::get('/all', [ContatoController::class, 'all']);
    Route::post('/create', [ContatoController::class, 'create']);
    Route::post('/update', [ContatoController::class, 'update']);
    Route::get('/view/{id}', [ContatoController::class, 'view']);
    Route::post('/delete', [ContatoController::class, 'delete']);
});
