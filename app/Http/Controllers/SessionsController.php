<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'destroy']);
    }

    public function create()
    {
        // Attempt to authenticate the user

        if (! auth()->attempt(request(['email', 'password']))) 
        {
            // if not, redirect back !!!
            return back()->withErrors([
                'message' => 'Please chech your credentials and try again.'
            ]);
        }
       
        // if so, sign them in -- done automatically by the attempt helper function

        // redirect to the home page
        return redirect()->home();
    }
    public function store()
    {
        return view('sessions.create');
    }
    public function destroy()
    {
        auth()->logout();

        return redirect()->home();
    }
}
