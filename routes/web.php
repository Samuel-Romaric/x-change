<?php

Route::namespace('App\\Http\\Controllers')->group(function () {

    Route::middleware('guest')->group(function () {
        Route::get('/login', 'Auth\AuthenticatedSessionController@create')->name('login');
        Route::post('/login', 'Auth\AuthenticatedSessionController@store')->name('login');

        Route::get('/register', 'Auth\RegisteredUserController@create')->name('register');
        Route::post('/register', 'Auth\RegisteredUserController@store')->name('register');
    });

    Route::middleware('auth')->group(function () {
        Route::get('/', 'ManagerController@index')->name('home');

        Route::get('/post/{post_id}', 'PostController@edit')->name('posts.edit');
        Route::put('/post/{post_id}', 'PostController@update')->name('posts.update');

        Route::get('/create/', 'PostController@create')->name('posts.create');
        Route::post('/store/', 'PostController@store')->name('posts.store');

        Route::delete('/post/{post_id}/', 'PostController@destroy')->name('posts.destroy');

        Route::post('/logout', 'Auth\AuthenticatedSessionController@destroy')
            ->name('logout');
    });
});
