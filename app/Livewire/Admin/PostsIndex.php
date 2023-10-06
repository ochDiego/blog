<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Post;
use Livewire\WithPagination;

class PostsIndex extends Component
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
        $posts = Post::where('user_id',auth()->user()->id)
                    ->where('name','like','%' . $this->search . '%')
                    ->latest('id')
                    ->paginate(6);

        return view('livewire.admin.posts-index',compact('posts'));
    }
}
