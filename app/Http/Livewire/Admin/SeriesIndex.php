<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

use App\Models\Series;

use Livewire\WithPagination;

class SeriesIndex extends Component
{

    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public $search;

    public function updatingSearch(){

        $this->resetPage();
    }

    public function render()
    {
        $series = Series::where('user_id', auth()->user()->id)
        ->where('titulo','LIKE','%'. $this->search . '%')
        ->latest('id')
        ->paginate();

        return view('livewire.admin.series-index',compact('series'));
    }
}
