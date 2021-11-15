<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profesor;

class ProfesoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $name= $request->get('buscarpor');

        $profesores = Profesor::profesor($name)->paginate(100);
        return view('Profesores.ViewProfesor', ['profesores' => $profesores]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $profesores = Profesor::all();
        return view('Profesores.createProfesor', compact('profesores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'lastnameP' => 'required|max:40',
            'nameP' => 'required|max:40',
        ]);

        $profesor = new Profesor();
        $profesor->ProfesorApellido = $request->lastnameP;
        $profesor->ProfesorNombre = $request->nameP;
        $profesor->save();
        return redirect()->route('FormProfesor')->with('profesorSuccess', __('El docente "' . $profesor->ProfesorApellido . ' ' . $profesor->ProfesorNombre . '" fue creado'));
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
        $profesores = Profesor::findOrFail($id);
        return view('Profesores.editProfesor', compact('profesores'));
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
            'lastnameP' => 'required|max:40',
            'nameP' => 'required|max:40',
        ]);

        $profesor = Profesor::findOrFail($id);
        $profesor->ProfesorApellido = $request->lastnameP;
        $profesor->ProfesorNombre = $request->nameP;
        $profesor->save();
        return redirect()->route('FormProfesor')->with('profesorPrimary', __('Los datos del docente fueron actualizados y ahora se llama "' . $profesor->ProfesorApellido . ' ' . $profesor->ProfesorNombre . '"'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $profesores = Profesor::findOrFail($id);
        // $profesores->delete();
        $profesores = Profesor::destroy($id);
        return redirect()->route('FormProfesor')->with('profesorDanger', __('El docente fue eliminado'));
    }
}
