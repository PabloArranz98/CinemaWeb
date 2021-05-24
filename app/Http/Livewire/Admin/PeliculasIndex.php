<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Peliculas;

use Livewire\WithPagination;

class PeliculasIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public $search;

    public function updatingSearch(){

        $this->resetPage();
    }

    public function render()
    {
        $peliculas = Peliculas::where('user_id',auth()->user()->id)
        ->where('titulo', 'LIKE', '%' .$this->search .'%')
        ->latest('id')
        ->paginate();

        return view('livewire.admin.peliculas-index',compact('peliculas'));
    }
}
