<?php

namespace App\Http\Controllers;

use App\User;

class RegistrationsController extends Controller
{
    public function create()
    {
        return view('registrations.create');
    }
    public function store()
    {
        // we want to
        // validate the form
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed' // for naming password_confirmation
        ]);

        // create and save the user
        $user = User::create(request([
            'name', 'email', 'password'
        ]));

        // sign them in
        //\Auth::login();
        auth()->login($user);

        // redirect to the homepage
        return redirect()->home();
    }
}
