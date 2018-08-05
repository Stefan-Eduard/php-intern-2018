<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PostsController@index');

Route::get('/posts/{post}', 'PostsController@show');

 
// Associated Eloquent Model => Post
// *we create the first with -m and -c flags (-mc)
// And I' ll need a controller => PostsController 
// A migration => creats_posts_table
