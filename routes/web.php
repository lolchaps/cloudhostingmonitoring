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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// No auth middleware yet
Route::get('/admin', 'HomeController@index')->name('admin');

Route::get('/users/{user}/edit', 'UsersController@edit')->name('users.edit');