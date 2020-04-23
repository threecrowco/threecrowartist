<?php

use Illuminate\Support\Facades\Route;

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

// Pages Routes
Route::get('/', 'PagesController@index')->name('pages.index');

// Post Routes
Route::get('/posts', 'PostsController@index')->name('posts.index');
Route::get('/posts/{id}', 'PostsController@show')->name('posts.show');

// Album Routes
Route::get('/albums', 'AlbumsController@index')->name('albums.index');
Route::get('/albums/{id}', 'AlbumsController@show')->name('albums.show');

// Tour Routes
Route::get('/tour', 'TourController@index')->name('tour.index');
Route::get('/tour/{id}', 'TourController@show')->name('tour.show');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
