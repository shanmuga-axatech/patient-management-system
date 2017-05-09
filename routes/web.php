<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', function () {
	return view('home.index');
});
	
Route::resource('register', 'Register');
Route::resource('vitals', 'Vitals');
Route::resource('pharmacy', 'PharmacyView');
Route::resource('visits', 'VisitRecords');
Route::resource('doctor-notes', 'DoctorsNotes');
