<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carrera;
use App\Models\Sede;
use App\Models\Materia;

class CarrerasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carreras = Carrera::all();
        $materias = Materia::all();
        return view('Carreras.viewRace', compact(['carreras', 'materias']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sedes = Sede::all();
        $carreras = Carrera::all();//Esta carrera es solo para ver las que hay
        return view('Carreras.createRace', compact(['sedes', 'carreras']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'nameCarrera' => 'required|max:100|',
        //     'ageCarrera' => 'required|min:1|max:3',
        //     'resolucionCarrera' => 'required|max:10',
        //     'sedeCarrera' => 'required'
        // ]);

        $carrera = new Carrera();
        $carrera->CarreraDn = $request->nameCarrera;
        $carrera->CarreraAnios = $request->ageCarrera;
        $carrera->CarreraResolucion = $request->resolucionCarrera;
        $carrera->SedeId = $request->sedeCarrera;
        $carrera->SedeOptional1Id = $request->sedeOptional1;
        $carrera->SedeOptional2Id = $request->sedeOptional2;
        $carrera->save();
        return redirect()->route('FormRace')->with('RaceSuccess', __('La carrera "' . $carrera->CarreraDn . '" fue creada!'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $carreras = Carrera::findOrFail($id);
        // $materias = Materia::all();
        // $sedes = Sede::all();
        // return view('Carreras.ViewRace', compact(['carreras', 'materias', 'sedes']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $carreras = Carrera::findOrFail($id);
        $sedes = Sede::all();
        return view('Carreras.editRace', compact(['carreras', 'sedes']));
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
        $this->validate($request, [
            'nameCarrera' => 'required|max:100|',
            'ageCarrera' => 'required|min:1|max:3',
            'resolucionCarrera' => 'required|max:10',
            'sedeCarrera' => 'required',
            'sedeOptional1',
            'sedeOptional2'
        ]);

        $carrera = Carrera::findOrFail($id);
        $carrera->CarreraDn = $request->nameCarrera;
        $carrera->CarreraAnios = $request->ageCarrera;
        $carrera->CarreraResolucion = $request->resolucionCarrera;
        $carrera->SedeId = $request->sedeCarrera;
        $carrera->SedeOptional1Id = $request->sedeOptional1;
        $carrera->SedeOptional2Id = $request->sedeOptional2;
        $carrera->save();
        return redirect()->route('FormRace')->with('RacePrimary', __('La carrera fue actualizada y ahora se llama "' . $carrera->CarreraDn . '"'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $carreras = Carrera::destroy($id);
        return redirect()->route('FormRace')->with('RaceDanger', __('La carrera fue eliminada!'));
    }
}
