<?php

Route::get('/folders/{id}/tasks', 'TaskController@index')->name('tasks.index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
