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
Route::resource('register', 'Register'); //done

Route::post('search/patient-details', 'Search@patientDetails');

Route::get('vitals/entry','Vitals@entry');
Route::resource('vitals', 'Vitals');
Route::post('vitals/pass', 'Vitals@pass');



Route::resource('pharmacy', 'PharmacyView');
Route::resource('visits', 'VisitRecords');
Route::resource('doctor-notes', 'DoctorsNotes');
