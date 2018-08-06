<?php

namespace App;

// now, Post extends our own model - Model

class Post extends Model
{
    public function comments()
    {
        return $this->hasMany(Comment::class); // equivalent to ('App\Comment')
    }
}
