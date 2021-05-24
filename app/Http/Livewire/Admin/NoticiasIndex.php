<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Noticias;



use Livewire\WithPagination;

class NoticiasIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public $search;

    public function updatingSearch(){

        $this->resetPage();
    }

    public function render()
    { 

        $noticias = Noticias::where('user_id',auth()->user()->id)
        ->where('titulo', 'LIKE', '%' .$this->search .'%')
        ->latest('id')
        ->paginate(4);

        return view('livewire.admin.noticias-index',compact('noticias'));


        
    }
}
