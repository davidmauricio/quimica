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

Route::get('/home', 'HomeController@index')->name('home');


//Routes 
Route::middleware(['auth'])->group(function(){

	Route::post('roles/store','RoleController@store')->name('roles.store')->middleware('permission:roles.create');

	Route::get('roles','RoleController@index')->name('roles.index')->middleware('permission:roles.index');

	Route::get('roles/create','RoleController@create')->name('roles.create')->middleware('permission:roles.create');

	Route::put('roles/{role}','RoleController@update')->name('roles.update')->middleware('permission:roles.edit');

	Route::get('roles/{role}','RoleController@show')->name('roles.show')->middleware('permission:roles.show');

	Route::delete('roles/{role}','RoleController@destroy')->name('roles.destroy')->middleware('permission:roles.destroy');

	Route::get('roles/{role}/edit','RoleController@edit')->name('roles.edit')->middleware('permission:roles.edit');

	//Asignatura
	Route::post('asignatura/store','AsignaturaController@store')->name('asignatura.store')->middleware('permission:asignatura.create');  //Store es post

	Route::get('asignatura','AsignaturaController@index')->name('asignatura.index')->middleware('permission:asignatura.index'); //index es get

	Route::get('asignatura/create','AsignaturaController@create')->name('asignatura.create')->middleware('permission:asignatura.create');  //create es get 

	Route::put('asignatura/{asignatura}','AsignaturaController@update')->name('asignatura.update')->middleware('permission:asignatura.edit'); //update es put

	Route::get('asignatura/{asignatura}','AsignaturaController@show')->name('asignatura.show')->middleware('permission:asignatura.show');

	Route::delete('asignatura/{asignatura}','AsignaturaController@destroy')->name('asignatura.destroy')->middleware('permission:asignatura.destroy');// destroy es delete

	Route::get('asignatura/{asignatura}/edit','AsignaturaController@edit')->name('asignatura.edit')->middleware('permission:roles.edit');


	//Users
	

	Route::get('users','UserController@index')->name('users.index')->middleware('permission:users.index');

	

	Route::put('users/{user}','UserController@update')->name('users.update')->middleware('permission:users.edit');

	Route::get('users/{user}','UserController@show')->name('users.show')->middleware('permission:users.show');

	Route::delete('users/{user}','UserController@destroy')->name('users.destroy')->middleware('permission:users.destroy');

	Route::get('users/{user}/edit','UserController@edit')->name('users.edit')->middleware('permission:users.edit');
});