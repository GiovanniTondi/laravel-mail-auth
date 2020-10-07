<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', function() { return redirect() -> route('post-index'); });

Route::get('/posts', 'GuestController@index') -> name('post-index');
Route::get('/post/{id}', 'GuestController@show') -> name('post-show');
Route::get('/post/edit/{id}', 'LoggedController@edit') -> name('post-edit');
Route::post('/post/update/{id}', 'LoggedController@update') -> name('post-update');
Route::get('/post/delete/{id}', 'LoggedController@delete') -> name('post-delete');


Route::get('/mailable/delete', function() {

    $user = App\User::inRandomOrder() -> first();
    $post = App\Post::inRandomOrder() -> first();
    $action = 'DELETE';

    return new App\Mail\PostDelete($user, $action, $post);
});

Route::get('/mailable/edit', function() {

    $user = App\User::inRandomOrder() -> first();
    $post = App\Post::inRandomOrder() -> first();
    $postEx = App\Post::inRandomOrder() -> first();
    $action = 'EDIT';

    return new App\Mail\PostEdit($user, $action, $post, $postEx);
});
