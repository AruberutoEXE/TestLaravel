<?php

namespace App\Http\Controllers;
use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
     /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $Persona = Persona::orderBy('id')->paginate(5);
        return view('Persona.index', compact('Persona'));
    }
   
    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        
        return view('Persona.create');
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
            'name' => 'required',
            'apellidos' => 'required',
            'edad' => 'required'
        ]);
        
        Persona::create($request->post());

        return redirect()->route('Persona.index')->with('success','Persona se ha creado con exito.');
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\Persona  $Persona
    * @return \Illuminate\Http\Response
    */
    public function show(Persona $Persona)
    {
        return view('Persona.show',compact('Persona'));
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Persona  $Persona
    * @return \Illuminate\Http\Response
    */
    public function edit(Persona $Persona)
    {
        return view('Persona.edit',compact('Persona'));
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Persona  $Persona
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, Persona $Persona)
    {
        $request->validate([
            'name' => 'required',
            'apellidos' => 'required',
            'edad' => 'required'
        ]);
        
        $Persona->fill($request->post())->save();

        return redirect()->route('Persona.index')->with('success','Persona Has Been updated successfully');
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Persona  $Persona
    * @return \Illuminate\Http\Response
    */
    public function destroy(Persona $Persona)
    {
        $Persona->delete();
        return redirect()->route('Persona.index')->with('success','Persona has been deleted successfully');
    }

}
