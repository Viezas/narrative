<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'body', 
        'created_at',
        'updated_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function likes()
    {
        return $this->belongsToMany(User::class);
    }

    public function isLiked()
    {
        if (auth()->check()) {
            return auth()->user()->likes->contains('id', $this->id);
        }
    }

    public function countLikes($postId)
    {
        return DB::table('post_user')->where('post_id', '=', $postId)->get();
    }
}
