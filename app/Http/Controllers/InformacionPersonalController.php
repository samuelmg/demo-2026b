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

        return redirect()->route('informacion-personal.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(InformacionPersonal $informacionPersonal)
    {
        return view('detalle', compact('informacionPersonal')); // compact('informacionPersonal') equivale a ->with(['informacionPersona' => $informacionPersonal])
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(InformacionPersonal $informacionPersonal)
    {
        return view('editar', compact('informacionPersonal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, InformacionPersonal $informacionPersonal)
    {
        $informacionPersonal->nombre = $request->nombre;
        $informacionPersonal->correo = $request->correo;
        $informacionPersonal->fecha_nacimiento = $request->fecha_nacimiento;
        $informacionPersonal->save();

        return redirect()->route('informacion-personal.show', $informacionPersonal);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InformacionPersonal $informacionPersonal)
    {
        //
    }
}
