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

Route::get('/', 'MyController@index')->name('home-page');
Route::get('/category/{id}', 'MyController@showCategory') -> name('categories');
Route::get('/post/{id}', 'MyController@showPost') -> name('posts');
Route::get('admin/post/create', 'MyController@create') -> name('create.post');
Route::post('admin/post/store', 'MyController@store') -> name('store.post');
