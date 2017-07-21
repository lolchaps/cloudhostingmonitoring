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

Route::middleware(['auth'])->group(function () {
	Route::get('/reports', 'ReportsController@index')->name('reports.index')->middleware('can:reports');

	Route::get('/admin', 'AdminController@index')->name('admin')->middleware('can:admin');

	Route::get('/my-account', 'MyAccountController@show')->name('my-account');
	Route::patch('/my-account', 'MyAccountController@update')->name('my-account.update');

	Route::get('/home', 'HomeController@index')->name('home');

	Route::resource('/users', 'UsersController');
});