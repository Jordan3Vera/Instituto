<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sede;
use App\Models\Carrera;

class SedesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sedes = Sede::all();
        $carreras = Carrera::all();
        return view('Sedes.ViewSedes', compact(['sedes', 'carreras']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sedes = Sede::all();
        return view('Sedes.createSedes', compact('sedes'));
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
            'nombreSede' => 'required|max:100|',
            'direSede' => 'required|max:255',
            'alturaSede' => 'required|max:4',
        ]);

        $sede = new Sede();
        $sede->SedeDn = $request->nombreSede;
        $sede->SedeDireCalle = $request->direSede;
        $sede->SedeDireAltura = $request->alturaSede;
        $sede->save();
        return redirect()->route('FormSede')->with('sedeSuccess', __('La sede "' . $sede->SedeDn . '" fue creada!'));
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
        $sedes = Sede::findOrFail($id);
        return view('Sedes.editSedes', compact('sedes'));
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
            'nombreSede' => 'required|max:100|',
            'direSede' => 'required|max:255',
            'alturaSede' => 'required|max:4',
        ]);

        $sede = Sede::findOrFail($id);
        $sede->SedeDn = $request->nombreSede;
        $sede->SedeDireCalle = $request->direSede;
        $sede->SedeDireAltura = $request->alturaSede;

        $sede->save();
        return redirect()->route('FormSede')->with('sedePrimary', __('La sede fue actualizada y ahora se llama "' . $sede->SedeDn . '"'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sedes = Sede::destroy($id);
        return redirect()->route('FormSede')->with('sedeDanger', __('La sede fue eliminada!'));
    }
}
