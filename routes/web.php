<?php

//Route::get('/folders/{id}/tasks', 'TaskController@index')->name('tasks.index');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
