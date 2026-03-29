<?php

use Illuminate\Support\Facades\Route;
/*  ROTA PADADRAO DO LARAVEL**/
// Route::get('/', function () {
//     return view('welcome');
// });

// ROTA PARA TELA DE LOGIN DO PROJETO
Route::get('/', function () {
    return view('auth.logon')->with('login', 'Faça login para acessar o sistema');
    // return view('auth.logon')->name('login');
})->name('login');
