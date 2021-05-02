<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;

class Post extends Component
{
    public $post;
    public $postId;
    public $name;
    public $body;
    public $date;
    public $like;
    public $likes;

    public function mount($post)
    {
        $this->post = $post;
        $this->postId = $post->id;
        $this->name = $post->user->name;
        $this->body = $post->body;
        $this->date = $post->created_at->diffForHumans();
        $this->like = $post->isLiked();
        $this->likes = $post->countLikes($this->postId)->count() > 0 ? $post->countLikes($this->postId)->count() : 0;
    }

    public function render()
    {
        return view('livewire.post');
    }

    public function like()
    {
        auth()->user()->likes()->toggle($this->postId);
        $this->likes = $this->post->countLikes($this->postId)->count();
        $this->like = !$this->like;
    }
}
