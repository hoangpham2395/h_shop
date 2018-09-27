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

Route::prefix('management')->group(function () {
	Route::middleware(['checkLoginAdmin'])->group(function () {
        Route::get('/', 'Backend\DashboardController@index');
	    Route::get('dashboard', ['as' => 'dashboard', 'uses' => 'Backend\DashboardController@index']);
		Route::resource('admin', 'Backend\AdminController');
		Route::resource('jobs', 'Backend\JobsController')->except(['create', 'edit']);
		Route::resource('employees', 'Backend\EmployeesController');
	});
	// Login admin
	Route::get('login', 'Backend\LoginController@getLogin');
	Route::post('login', ['as' => 'admin.login', 'uses' => 'Backend\LoginController@postLogin']);
	Route::get('logout', ['as' => 'admin.logout', 'uses' => 'Backend\LoginController@logout']);
});
