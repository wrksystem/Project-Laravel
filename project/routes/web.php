<?php

use App\Http\Controllers\AdocaoController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', function(){
    return view('template-mi');
})->name("Tela-Principal");

Route::post('registro', [UserController::class, 'registUser']
)->name("registro");

Route::get('home', [UserController::class, 'loginUser']
)->name("home");

Route::get('registData', [AdocaoController::class, 'registData']
)->name("registData");

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');//
