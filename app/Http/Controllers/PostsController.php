<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// added
use App\Post;

class PostsController extends Controller
{
    public function index()
    {   // it's a controller action
        $posts = Post::latest()->get(); // latest is a query

        return view('posts.index', compact('posts'));
    }
    public function show(Post $post) // route model binding
    {
        return view('posts.show', compact('post'));
    }
    public function create()
    {
        return view('posts.create');
    }
    public function store() 
    {
    //    $this->validate(request(), [
    //     'title' => 'required',
    //     'body' => 'required'
    //    ]); // error : no function such as validate()
   
        Post::create(request(['title', 'body'])); 
        
        return redirect('/'); 
    }
}
