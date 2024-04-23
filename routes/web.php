<?php

use App\Http\Controllers\ContatoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

route::get('contato', [ContatoController::class, 'contato']);
route::post('contato', [ContatoController::class, 'enviarFormulario']);
