<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Form extends Component
{
    public $body;

    protected $rules = [
        'body' => 'required|min:15'
    ];

    public function render()
    {
        return view('livewire.form');
    }

    public function createPost()
    {
        $this->validate();
        $post = auth()->user()->posts()->create(['body' => $this->body]);
        $this->emit('postAdded', $post->id);
        $this->body = "";
    }
}
