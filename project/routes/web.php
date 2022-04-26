<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name("home");

Route::get('/2', function () {
    return view('login');
})->name("login");

Route::get('/3', function () {
    return view('cadastro');
})->name("cadastro");

Route::get('/4', function () {
    return view('about');
})->name("about");

Route::get('/5', function () {
    return view('adocao');
})->name("adocao");

Route::get('/6', function () {
    return view('galery');
})->name("galery");

Route::get('/7', function () {
    return view('saibamais_participe');
})->name("saibamais_participe");
