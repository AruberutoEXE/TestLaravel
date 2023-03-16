<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gerente;
class GerenteController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $Gerente = Gerente::orderBy('id')->paginate(5);
        return view('Gerente.index', compact('Gerente'));
    }
   
    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        
        return view('Gerente.create');
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
        'salario' => 'required',
        'trabajador_id' => 'required'
        ]);
        
        Gerente::create($request->post());

        return redirect()->route('Gerente.index')->with('success','Gerente se ha creado con exito.');
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\Gerente  $Gerente
    * @return \Illuminate\Http\Response
    */
    public function show(Gerente $Gerente)
    {
        return view('Gerente.show',compact('Gerente'));
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Gerente  $Gerente
    * @return \Illuminate\Http\Response
    */
    public function edit(Gerente $Gerente)
    {
        return view('Gerente.edit',compact('Gerente'));
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Gerente  $Gerente
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, Gerente $Gerente)
    {
        $request->validate([
            'salario' => 'required',
            'trabajador_id' => 'required'
        ]);
        
        $Gerente->fill($request->post())->save();

        return redirect()->route('Gerente.index')->with('success','Gerente Has Been updated successfully');
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Gerente  $Gerente
    * @return \Illuminate\Http\Response
    */
    public function destroy(Gerente $Gerente)
    {
        $Gerente->delete();
        return redirect()->route('Gerente.index')->with('success','Gerente has been deleted successfully');
    }
}
