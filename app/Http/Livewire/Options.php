<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Genero;

class Options extends Component
{
    public function render()
    {
        $generos = Genero::all();

        return view('livewire.options',compact('generos'));
    }
}
