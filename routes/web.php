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
Route::middleware(['auth'])->group(function () {
	Route::get('/admin', 'HomeController@index')->name('admin');

	Route::get('my-account', 'MyAccountController@show')->name('my-account');

	Route::resource('users', 'UsersController');
});