<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materia;
use App\Models\Carrera;

class MateriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $carreras = Carrera::all();
        $materias = Materia::all();
        return view('Materias.createSubjects', compact(['carreras', 'materias']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nameMateria' => 'required|max:50',
            'nameCarrera' => 'required|max:255',
            'ageMateria' => 'required|min:1|max:3',
        ]);

        $materia = new Materia();
        $materia->MateriaDn = $request->nameMateria;
        $materia->CarreraId = $request->nameCarrera;
        $materia->Anio = $request->ageMateria;
        $materia->save();
        return redirect()->route('FormSubject')->with('subjectSuccess', __('La materia "' . $materia->MateriaDn . '" fue creada!'));
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
        $materias = Materia::findOrFail($id);
        $carreras = Carrera::all();
        return view('Materias.editSubjects', compact(['materias', 'carreras']));
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
        $this->validate($request,[
            'nameMateria' => 'required|max:50',
            'nameCarrera' => 'required|max:255',
            'ageMateria' => 'required|min:1|max:3',
        ]);

        $materia = Materia::findOrFail($id);
        $materia->MateriaDn = $request->nameMateria;
        $materia->CarreraId = $request->nameCarrera;
        $materia->Anio = $request->ageMateria;
        $materia->save();
        return redirect()->route('FormSubject')->with('subjectPrimary', __('La materia fue actualizada y ahora se llama "' . $materia->MateriaDn . '"'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $materias = Materia::findOrFail($id);
        $materias->delete();
        return redirect()->route('FormSubject')->with('subjectDanger', __('La materia fue eliminada'));
    }
}
