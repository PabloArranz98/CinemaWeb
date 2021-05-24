<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Noticias;

use App\Http\Requests\NoticiasRequest;
use Illuminate\Support\Facades\Storage;

class NoticiasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.noticias.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.noticias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NoticiasRequest $request)
    {
        //

        /*    return  Storage::put('peliculas', $request->file('file')); */

        $noticia =  Noticias::create($request->all());

        if($request->file('file')){

            $url = Storage::put('noticias', $request->file('file'));
     
            $noticia->image()->create([
                'url' => $url
            ]);
     
          }

        return redirect()->route('admin.noticias.edit',$noticia);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Noticias $noticia)
    {
        //
        return view('admin.noticias.show',compact('noticia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Noticias $noticia)
    {
        //
         return view('admin.noticias.edit',compact('noticia'));
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NoticiasRequest $request, Noticias $noticia)
    {
        //

        

        $noticia->update($request->all());

        if ($request->file('file')) {

            # code...
         $url = Storage::put('noticias',$request->file('file'));
        

        if ($noticia->image) {
            # code...
            Storage::delete($noticia->image->url);

            $noticia->image->update([

                'url' => $url
            ]);
        } else{
            $noticia->image()->create([

                'url' => $url
            ]);
    }

}

return redirect()->route('admin.noticias.edit', $noticia)->with('info','La noticia se actualizo con éxito');
}
    
     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Noticias $noticia)
    {
        //
        $noticia->delete();

        return redirect()->route('admin.noticias.index')->with('info3','La noticia se elimino con éxito');
    }
}
