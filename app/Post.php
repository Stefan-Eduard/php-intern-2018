<?php

namespace App;

// now, Post extends our own model - Model

use Carbon\Carbon;

class Post extends Model
{
    public function comments()
    {
        return $this->hasMany(Comment::class); // equivalent to ('App\Comment')
    }
    // $post->user
    public function user() // $post->user->name
    {
        return $this->belongsTo(User::class);
    }
    public function addComment($body) // we accept the body of the comment
    {
        $this->comments()->create(compact('body')); // Automatically sets the post_id
        
        // Comment::create([
        //     'body' => $body,
        //     'post_id' => $this->id
        // ]);
    }
    public function scopeFilter($query, $filters)
    {
        if($month = $filters['month'])
        {
            $query->whereMonth('created_at', Carbon::parse($month)->month);
        }

        if($year = $filters['year'])
        {
            $query->whereYear('created_at', $year);
        }
    }
}
