<?php

use App\Post;
use Illuminate\Http\Request;

Route::get('/', function () {
    $posts = DB::table('posts')->paginate(10);
    return view('posts', [ 'posts' => $posts ]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
