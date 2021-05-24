<?php

namespace App\Http\Controllers;

use App\Models\Genero;


use App\Models\Peliculas;
use App\Models\Valoraciones;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PeliculasController extends Controller
{
    //

    public function index(){

        

        $peliculas = Peliculas::latest('id')->paginate(8);


        return view('peliculas.index',compact('peliculas'));

    }

    public function show( Peliculas $pelicula){

        $similares =Peliculas::where('genero_id', $pelicula->genero_id)
        ->where('id','!=',$pelicula->id)
        ->latest('id')
        ->take(4)
        ->get();

        return view('peliculas.show',compact('pelicula','similares'));

        
    }

    public function ValoracionesPeliculas(){
        $valoracion = Valoraciones::latest('id')->paginate(4);


        return view('peliculas.valoracion',compact('valoracion'));

    }

     public function VInfo(Valoraciones $valoracion){

        
      

      return view('peliculas.criticas',compact('valoracion'));

}
   

   public function store(Request $request,User $user){


    $request->validate([
        
        'comentario' => 'required',
        'nota' => 'required',
      
    ]);
    
    $valoracion = new Valoraciones();

   
    $valoracion->titulo = $request->titulo;
    $valoracion->comentario = $request->comentario;
    $valoracion->nota = $request->nota;
    $valoracion->name = Auth::user()->name; 

    $valoracion->save();

    return redirect()->route('peliculas.valoracion',$valoracion);
}

 
    public function GeneroPeliculas( Genero $genero){

      $pelicula = Peliculas::where('genero_id', $genero->id)
                                ->latest('id')
                                ->paginate(2);

                return view('peliculas.genero', compact('pelicula','genero'));
    }
    
}
