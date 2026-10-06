<?php

use App\Models\InformacionPersonal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/horozcopos', function () {
    $informacionPersonal = InformacionPersonal::all();
    
    // dd($informacionPersonal, 'hola', 'adios');

    return view('registros')->with([
        'informacionPersonal' => $informacionPersonal,
    ]);
});

Route::get('/formulario-horozcopo', function () {
    return view('formulario');
});

Route::post('/recibe-formulario', function (Request $request) {
    $infoPersoal = new InformacionPersonal();
    $infoPersoal->nombre = $request->nombre;
    $infoPersoal->correo = $request->correo;
    $infoPersoal->fecha_nacimiento = $request->fecha_nacimiento;
    $infoPersoal->save();

    return redirect('/horozcopos');
});
