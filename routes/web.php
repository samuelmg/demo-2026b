<?php

use App\Http\Controllers\InformacionPersonalController;
use App\Models\InformacionPersonal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('informacion-personal', InformacionPersonalController::class);

// Route::get('/horozcopos', [InformacionPersonalController::class, 'index']);
// Route::get('/formulario-horozcopo', [InformacionPersonalController::class, 'create']);
// Route::post('/recibe-formulario', [InformacionPersonalController::class, 'store']);
// Route::get('/detalle/{informacionPersonal}', [InformacionPersonalController::class, 'show']);
// Formulario para editar información personal
// Actualizar información personal
// Eliminar información personal

