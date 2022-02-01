<?php
    Route::get('/', 'PostController@index');
    Route::get('/posts/create', 'PostController@create');
    Route::get('/posts/{post}/edit', 'PostController@edit');
    Route::get('/posts/{post}', 'PostController@show');
    Route::post('/posts', 'PostController@store');
    Route::put('/posts/{post}', 'PostController@update');
    
    