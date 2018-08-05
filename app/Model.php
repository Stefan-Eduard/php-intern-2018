<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Model extends Eloquent
{
    // protected $fillable = ['title', 'name'];
    protected $guarded = [];
    // used for mass assignment, and for safety
}
