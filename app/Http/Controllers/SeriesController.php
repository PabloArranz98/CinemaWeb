<?php

namespace App\Http\Controllers;

use App\Models\Series;
use App\Models\Genero;
use App\Models\User;
use App\Models\ValoracionesS;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class SeriesController extends Controller
{
    //

    public function SeriesIndex(){
        $series = Series::latest('id')->paginate(8);


        return view('series.index',compact('series'));

    }

   public function showSeries(Series $serie){
    

        $similares2 =Series::where('genero_id', $serie->genero_id)
        ->where('id','!=',$serie->id)
        ->latest('id')
        ->take(4)
        ->get();

        return view('series.show',compact('serie','similares2'));
    }

  

      public function ValoracionesSeries(){
        $valorac = ValoracionesS::latest('id')->paginate(4);


        return view('series.valoracion',compact('valorac'));

    }

     public function Vinfo(ValoracionesS $valorac){

      

      return view('series.criticas',compact('valorac'));

}
   



   

   public function store(Request $request, User $user){


    
    $request->validate([
       
        'comentario' => 'required',
        'nota' => 'required',
      
    ]);
    

  

    $valorac = new ValoracionesS();

   
    $valorac->titulo = $request->titulo;
    $valorac->comentario = $request->comentario;
    $valorac->nota = $request->nota;
    $valorac->name = Auth::user()->name; 

    $valorac->save();

    return redirect()->route('series.valoracion',$valorac);
}


public function GeneroSeries( Genero $Generos){

    $series = Series::where('genero_id', $Generos->id)
                              ->latest('id')
                              ->paginate(2);

              return view('series.genero', compact('series','Generos'));

    

  }


   }

