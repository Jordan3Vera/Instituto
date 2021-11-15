<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Datos;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = Datos::all();
        return view('Datos_del_usuario.data', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Datos_del_usuario.createData');
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
            'age' => 'required|min:0|max:100',
            'date' => 'required|date',
            'sex' => 'required|string|max:40',
            'country' => 'required|string|max:50',
            'province' => 'required|string|max:50',
            'city' => 'required|string|max:100',
            'home' => 'required|string|max:100',
            'civil' => 'required|string|max:40',
        ]);

        $datos = new Datos();
        $datos->age = $request->age;
        $datos->date = $request->date;
        $datos->sex = $request->sex;
        $datos->country = $request->country;
        $datos->province = $request->province;
        $datos->city = $request->city;
        $datos->home = $request->home;
        $datos->civil_status = $request->civil;
        $datos->save();

        return redirect()->route('profile')->with('dataSuccefully', __('Los datos fueron agregados exitosamente'));
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
        //
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
        //
    }
}
