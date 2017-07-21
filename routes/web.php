<?php

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

// Dummy view
Route::middleware(['auth'])->group(function () {

	Route::get('/projects', function () {
		return view('projects.index');
	})->name('projects')->middleware('can:projects');

	Route::get('/monitoring', function () {
		return view('monitoring.index');
	})->name('monitoring')->middleware('can:monitoring');

	Route::get('/knowledgebase', function () {
		return view('knowledgebase.index');
	})->name('knowledgebase')->middleware('can:knowledgebase');

	Route::get('/password-manager', function () {
		return view('password-manager.index');
	})->name('password_manager')->middleware('can:password_manager');

	Route::get('/purchases', function () {
		return view('purchases.index');
	})->name('purchases')->middleware('can:purchases');

	Route::get('/tickets', function () {
		return view('tickets.index');
	})->name('tickets')->middleware('can:tickets');

});
//
