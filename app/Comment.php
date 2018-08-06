<?php

namespace App;


class Comment extends Model
{
    // $comment->post
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
    // $comment->user
    public function user() // $comment->user->name
    {
        return $this->belongsTo(User::class);
    }
}
