<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Finales;

// Las relaciones
use App\Models\Carrera;
use App\Models\Llamado;
use App\Models\Division;
use App\Models\Materia;
use App\Models\Sede;
use App\Models\Profesor;

class FinalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $finales = Finales::all();
        $llamados = Llamado::all();
        return view('Finales.ViewEnds', compact(['finales', 'llamados']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sedes = Sede::all();
        $carreras = Carrera::all();
        $divisiones = Division::all();
        $materias = Materia::all();
        $llamados = Llamado::all();
        $profesores = Profesor::all();
        $finales = Finales::all();

        // Acá hago para especificar
        
        return view('Finales.createEnds', compact(['sedes', 'carreras', 'divisiones', 'materias', 'llamados', 'profesores','finales']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $finales = new Finales();
        $finales->SedeId = $request->nameSedeId;
        $finales->CarreraId = $request->nameCarreraId;
        $finales->DivisionId = $request->nameDivisionId;
        $finales->MateriaId = $request->nameMateriaId;
        $finales->AnioId = $request->AnioId;
        $finales->ProfesorId = $request->nameProfesorId;
        $finales->ProfesorVocal_id = $request->nameProfesorVocalId;
        $finales->ProfesorOptativo_id = $request->nameProfesorOptativoId;
        $finales->Llamado_id = $request->nameLlamadoId;
        $finales->Fecha = $request->date;
        $finales->save();
        return redirect()->route('ViewEnd')->with('endSuccess', __('El final fue creado'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $finales = Finales::findOrFail($id);
        return view('Finales.editEnds', compact('finales'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $finales = Finales::destroy($id);
        return redirect()->route('ViewEnd')->with('EndDanger', __('El final fue eliminado'));
    }
}
