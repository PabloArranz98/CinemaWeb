<?php

namespace App\Http\Livewire;

use App\Models\Peliculas;
use App\Models\Valoraciones;
use Livewire\Component;


class Option3 extends Component
{
    public function render()
    {  $peliculaC= Valoraciones::all();
      
        return view('livewire.option3',compact('peliculaC'));
    }
}

