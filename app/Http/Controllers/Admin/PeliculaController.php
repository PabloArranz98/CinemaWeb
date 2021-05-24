<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Peliculas;
use App\Models\Genero;

use Illuminate\Support\Facades\Storage;

use App\Http\Requests\PeliculasRequest;
class PeliculaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return view('admin.peliculas.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        //
        $generos = Genero::pluck('name', 'id');

        

        return view('admin.peliculas.create',compact('generos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PeliculasRequest $request)
    {
        //
     /*    return  Storage::put('peliculas', $request->file('file')); */

     $pelicula =  Peliculas::create($request->all());

     if($request->file('file')){

       $url = Storage::put('peliculas', $request->file('file'));

       $pelicula->image()->create([
           'url' => $url
       ]);

     }

         

      

      return redirect()->route('admin.peliculas.edit',$pelicula); 

      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Peliculas $pelicula)
    {
        //
        return view('admin.peliculas.show',compact('pelicula'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Peliculas $pelicula)
    {
        //

        $this->authorize('author',$pelicula);

        $generos = Genero::pluck('name', 'id');

        return view('admin.peliculas.edit',compact('pelicula','generos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PeliculasRequest $request, Peliculas $pelicula)
    {
        //

        $this->authorize('author',$pelicula);

        $pelicula->update($request->all());

        if ($request->file('file')) {

            # code...
         $url = Storage::put('peliculas',$request->file('file'));
        

        if ($pelicula->image) {
            # code...
            Storage::delete($pelicula->image->url);

            $pelicula->image->update([

                'url' => $url
            ]);
        } else{
            $pelicula->image()->create([

                'url' => $url
            ]);
        }

    }
    return redirect()->route('admin.peliculas.edit',$pelicula)->with('info','La película se actualizo con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Peliculas $pelicula)
    {
        //
        $this->authorize('author',$pelicula);

        $pelicula->delete();

        return redirect()->route('admin.peliculas.index')->with('info2','La película se elimino con éxito');

    }
}
