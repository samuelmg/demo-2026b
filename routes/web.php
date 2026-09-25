<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/formulario-horozcopo', function () {
    return view('formulario');
});

Route::post('/recibe-formulario', function (Request $request) {

   return $request->all();
});
