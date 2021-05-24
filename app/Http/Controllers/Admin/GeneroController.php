<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Genero;

class GeneroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $generos = Genero ::all();

        return view('admin.generos.index',compact('generos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.generos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $request->validate([
            'name'=>'required'
        ]);

     $genero = Genero::create($request->all());

     return redirect()->route('admin.generos.edit',$genero)->with('info','El genero se creo correctamente');
     ;
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Genero $genero)
    {
        //
        return view('admin.generos.show',compact('genero'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Genero $genero)
    {
        //
        return view('admin.generos.edit',compact('genero'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Genero $genero)
    {
        //

        $request->validate([
            'name'=>'required|unique:generos'
        ]);

        $genero->update($request->all());

        return redirect()->route('admin.generos.edit',$genero)->with('info','El genero se actualizo correctamente');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Genero $genero)
    {
        //

        $genero->delete();

        return redirect()->route('admin.generos.index')->with('info','El genero se elimino correctamente');
    }
}
