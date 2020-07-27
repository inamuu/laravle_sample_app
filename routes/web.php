<?php

use App\Post;
use Illuminate\Http\Request;

Route::get('/', function () {
    $posts = Post::all();
    return view('posts', [ 'posts' => $posts ]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
