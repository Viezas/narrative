<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Post extends Component
{
    public $name;
    public $body;

    public function mount($post)
    {
        $this->name = $post->user->name;
        $this->body = $post->body;
    }

    public function render()
    {
        return view('livewire.post');
    }
}
