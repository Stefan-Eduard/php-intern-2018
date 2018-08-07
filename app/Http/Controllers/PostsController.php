<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// added
use App\Post;
use Carbon\Carbon; // ***

class PostsController extends Controller
{
    public function __construct() 
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {   // it's a controller action
        
        // $archives = Post::archives();

        // $posts = Post::latest()
        //     ->filter(request(['month', 'year']))
        //     ->get();
        // instead of:
        // $posts = Post::latest(); 

        // if($month = request('month'))
        // {
        //     $posts->whereMonth('created_at', Carbon::parse($month)->month);
        // }

        // if($year = request('year'))
        // {
        //     $posts->whereYear('created_at', $year);
        // }

        // $posts = $posts->get();
        
        // $archives = 
        //     App\Post::selectRaw('year("created_at") year, month("created_at") month, count(*) published')
        //     ->groupBy('year', 'month')
        //     ->orderByRaw('min("created_at") desc')
        //     ->get()
        //     ->toArray();

        return view('posts.index', compact('posts', 'archives'));
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
        
        // what we could do:
        auth()->user()->publish(
            new Post(request(['title', 'body']))
        );

        // Post::create([
        //     'title' => request('title'),
        //     'body' => request('body'),
        //     'user_id' => auth()->id()
        // ]); 
        
        return redirect('/'); 
    }
}
