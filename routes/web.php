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

Auth::routes();

Route::get('/', function () {
    return redirect()->route('login');
});


Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');

//post
Route::post('/post', 'PostController@store')->name('post.store');
Route::get('/post/{id}', 'PostController@show')->name('post.show');
//profile
Route::get('/profile', 'ProfileController@index')->name('profile');
Route::post('/profile/{id}', 'ProfileController@update')->name('profile.update');
Route::get('/profile/{id}/edit', 'ProfileController@edit')->name('profile.edit');
//comment
Route::post('/comment/{id}', 'CommentController@store')->name('comment.store');
//message
Route::get('/message', 'MessageController@index')->name('message');
