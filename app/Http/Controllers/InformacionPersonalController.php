<?php

namespace App\Http\Controllers;

use App\Models\InformacionPersonal;
use Illuminate\Http\Request;

class InformacionPersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $informacionPersonal = InformacionPersonal::all();

        return view('registros')->with([
            'informacionPersonal' => $informacionPersonal,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formulario');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $infoPersoal = new InformacionPersonal();
        $infoPersoal->nombre = $request->nombre;
        $infoPersoal->correo = $request->correo;
        $infoPersoal->fecha_nacimiento = $request->fecha_nacimiento;
        $infoPersoal->save();

        return redirect('/horozcopos');
    }

    /**
     * Display the specified resource.
     */
    public function show(InformacionPersonal $informacionPersonal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(InformacionPersonal $informacionPersonal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, InformacionPersonal $informacionPersonal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InformacionPersonal $informacionPersonal)
    {
        //
    }
}
