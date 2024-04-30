<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SobreNosController;
use Illuminate\Support\Facades\Route;

Route::get('/contato', function () {
    return view('app.contato');
})->name('contato');


Route::get('/', [HomeController::class, 'homePage'])->name('home');
Route::get('/sobre-nos', [SobreNosController::class, 'sobrenosPage'])->name('sobrenos');

