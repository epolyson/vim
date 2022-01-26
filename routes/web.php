<?php
    Route::get('/', 'PostController@index');
    Route::get('/posts/{post}', 'PostController@show');
    Route::get('/create', 'PostController@create');
?>