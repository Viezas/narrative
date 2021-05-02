<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class Posts extends Component
{
    use WithPagination;

    // public $posts;

    protected $listeners = ['postAdded'];

    // public function mount()
    // {
    //     $this->posts = Post::latest()->get();
    // }

    public function render()
    {
        //return view('livewire.posts');
        return view('livewire.posts', [
            'posts' => Post::latest()->paginate(10)
        ]);
    }

    public function postAdded($id)
    {
        // $this->posts->prepend(Post::find($id));
        Post::find($id);
        session()->flash('status', 'Votre histoire a été mise en ligne avec succès !');
    }
}
