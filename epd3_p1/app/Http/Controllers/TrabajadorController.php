<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
use App\Models\Trabajador;
class TrabajadorController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $Trabajador = Trabajador::orderBy('id')->paginate(5);
        return view('Trabajador.index', compact('Trabajador'));
    }
   
    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        
        return view('Trabajador.create');
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
        'telefonos' => 'required',
        'persona_id'=> 'required'
        ]);
        
        Trabajador::create($request->post());

        return redirect()->route('Trabajador.index')->with('success','Trabajador se ha creado con exito.');
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\Trabajador  $Trabajador
    * @return \Illuminate\Http\Response
    */
    public function show(Trabajador $Trabajador)
    {
        return view('Trabajador.show',compact('Trabajador'));
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Trabajador  $Trabajador
    * @return \Illuminate\Http\Response
    */
    public function edit(Trabajador $Trabajador)
    {
        return view('Trabajador.edit',compact('Trabajador'));
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Trabajador  $Trabajador
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, Trabajador $Trabajador)
    {
        $request->validate([
            'telefonos' => 'required',
            'persona_id'=> 'required'
        ]);
        
        $Trabajador->fill($request->post())->save();

        return redirect()->route('Trabajador.index')->with('success','Trabajador Has Been updated successfully');
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Trabajador  $Trabajador
    * @return \Illuminate\Http\Response
    */
    public function destroy(Trabajador $Trabajador)
    {
        $Trabajador->delete();
        return redirect()->route('Trabajador.index')->with('success','Trabajador has been deleted successfully');
    }
}
