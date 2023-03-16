<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $Empleado = Empleado::orderBy('id')->paginate(5);
        return view('Empleado.index', compact('Empleado'));
    }
   
    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        
        return view('Empleado.create');
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
       $request->validate([
            'horasTrabajadas' => 'required',
            'precioPorHora' => 'required',
            'trabajador_id' => 'required'
        ]);
        
        Empleado::create($request->post());

        return redirect()->route('Empleado.index')->with('success','Empleado se ha creado con exito.');
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\Empleado  $Empleado
    * @return \Illuminate\Http\Response
    */
    public function show(Empleado $Empleado)
    {
        return view('Empleado.show',compact('Empleado'));
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Empleado  $Empleado
    * @return \Illuminate\Http\Response
    */
    public function edit(Empleado $Empleado)
    {
        return view('Empleado.edit',compact('Empleado'));
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Empleado  $Empleado
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, Empleado $Empleado)
    {
        $request->validate([
            'name' => 'required',
            'apellidos' => 'required',
            'edad' => 'required'
        ]);
        
        $Empleado->fill($request->post())->save();

        return redirect()->route('Empleado.index')->with('success','Empleado Has Been updated successfully');
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Empleado  $Empleado
    * @return \Illuminate\Http\Response
    */
    public function destroy(Empleado $Empleado)
    {
        $Empleado->delete();
        return redirect()->route('Empleado.index')->with('success','Empleado has been deleted successfully');
    }
}
