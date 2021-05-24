<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Genero;

class Option2 extends Component
{
    public function render()
    {
        $Generos = Genero::all();

        return view('livewire.option2',compact('Generos'));
    }
}
