<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class Posts extends Component
{
    public $posts;

    protected $listeners = ['postAdded'];

    public function mount()
    {
        $this->posts = Post::latest()->get();
    }

    public function render()
    {
        return view('livewire.posts');
    }

    public function postAdded($id)
    {
        $this->posts->prepend(Post::find($id));
        session()->flash('status', 'Votre histoire a été mise en ligne avec succès !');
    }
}
