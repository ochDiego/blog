<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Tag;
use Livewire\WithPagination;

class TagsIndex extends Component
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
        $tags = Tag::where('name','like','%' . $this->search . '%')
                    ->latest('id')
                    ->paginate(4);

        return view('livewire.admin.tags-index',compact('tags'));
    }
}
