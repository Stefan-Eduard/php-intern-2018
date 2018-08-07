<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // equiv. to view()->, which is a helper function
        // so everytime you load a view named 'layouts.sidebar' you add a callback function to make the archives var. available
        // terminology: with ->with() you are "binding" the variable to the view 
        \View::composer('layouts.sidebar', function($view) {
            $view->with('archives', \App\Post::archives());
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
