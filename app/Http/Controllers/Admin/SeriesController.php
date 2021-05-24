<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
USE App\Models\Series;
use App\Models\Genero;

use Illuminate\Support\Facades\Storage;

use App\Http\Requests\SeriesRequest;

class SeriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return view('admin.series.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $generos = Genero::pluck('name','id');

     

        return view('admin.series.create',compact('generos'));


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SeriesRequest $request)

    {
        //

       /*    return  Storage::put('serie', $request->file('file')); */

     $series =  Series::create($request->all());

     if($request->file('file')){

       $url = Storage::put('series', $request->file('file'));

       $series->image()->create([
           'url' => $url
       ]);

     }

         

      

      return redirect()->route('admin.series.edit',$series); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Series $series)
    {
        //
        return view('admin.series.show', compact('series'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Series $series)
    {
        //
        $this->authorize('author',$series);

        $generos = Genero::pluck('name','id');

        return view('admin.series.edit', compact('series','generos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SeriesRequest $request, Series $series)
    {
        //
        $this->authorize('author',$series);

        $series->update($request->all());

        if ($request->file('file')) {

            # code...
         $url = Storage::put('series',$request->file('file'));
        

        if ($series->image) {
            # code...
            Storage::delete($series->image->url);

            $series->image->update([

                'url' => $url
            ]);
        } else{
            $series->image()->create([

                'url' => $url
            ]);
        
        

    }

}

return redirect()->route('admin.series.edit', $series)->with('info','La serie se actualizo con éxito');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Series $series)
    {
        //

        $this->authorize('author',$series);

        $series->delete();

        return redirect()->route('admin.series.index')->with('info2','La serie se elimino con éxito');
    }
}
