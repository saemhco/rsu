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
    return view('login');
});


Route::get('login', function () {
    return view('welcome');
});

//Usuarios
	Route::get('drsu', function () {
	    return view('plantilla.drsu');
	});
	Route::get('drsuf', function () {
	    return view('plantilla.drsuf');
	});
	Route::get('docente', function () {
	    return view('plantilla.docente');
	});
	Route::get('directivo', function () {
	    return view('welcome');
	});
	Route::get('admin', function () {
	    return view('welcome');
	});
	Route::get('superAdmin', function () {
	    return view('welcome');
	});