<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;

class CategoriesIndex extends Component
{
    use WithPagination;

    public $search = '';

    protected $paginationTheme = 'bootstrap';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $categories = Category::where('name','like','%' . $this->search . '%')
                                ->latest('id')
                                ->paginate(5);

        return view('livewire.admin.categories-index',compact('categories'));
    }
}
