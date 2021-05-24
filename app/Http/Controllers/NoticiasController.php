<?php

namespace App\Http\Controllers;

use App\Models\Comentarios;
use App\Models\Noticias;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NoticiasController extends Controller
{
    //

    public function NoticiasIndex(){

        

        $noticias = Noticias::latest('id')->paginate(8);


        return view('noticias.index',compact('noticias'));

    }

    public function ShowNoticias( Noticias $noticias){

        $similares3 =Noticias::where('id','!=',$noticias->id)
        ->latest('id')
        ->take(4)
        ->get();


       
        return view('noticias.show',compact('noticias','similares3'));

        
    }

    public function Comentarios(){

        $comentario = Comentarios::latest('id')->paginate(4);
        


        return view('noticias.comentarios',compact('comentario'));
    }

  
  

    public function store(Request $request,Comentarios $comentario){


        $request->validate([
            
            'comentario' => 'required',
           
          
        ]);
        
    
      
    
        $comentario = new Comentarios();
    
       
        $comentario->titulo = $request->titulo;
        $comentario->comentario = $request->comentario;
        $comentario->name = Auth::user()->name; 
       
    
        $comentario->save();
    
        return redirect()->route('noticias.comentarios',$comentario);
    }
}
