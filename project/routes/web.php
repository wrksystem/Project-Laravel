<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('template-mi');
})->name("Tela-Principal");

Route::post('registro', [UserController::class, 'registUser']
)->name("registro");

Route::get('home', function(){
    return view('template_usuario');
})->name("tela-de-usuario");

