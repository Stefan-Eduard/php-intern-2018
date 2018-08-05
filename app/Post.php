<?php

namespace App;

// now, Post extends our own model - Model

class Post extends Model
{
    //protected $fillable = ['title', 'name'];
    protected $guarded = [];
    // used for mass assignment, and for safety
}
