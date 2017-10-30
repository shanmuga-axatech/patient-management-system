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
Route::post('vitals/pass', 'Vitals@pass');
Route::get('vitals/{id}/delete', ['as' => 'vitals.delete', 'uses' => 'Vitals@destroy']);
Route::resource('vitals', 'Vitals');

Route::get('visits/entry','Visits@entry');
Route::post('visits/pass', 'Visits@pass');
Route::get( 'visits/download/{visit_id}/{cate}', 'Visits@download');
Route::get('visits/{visit_id}/delete', ['as' => 'visits.delete', 'uses' => 'Visits@destroy']);
Route::resource('visits', 'Visits');

Route::get('doctor-notes/entry','DoctorsNotes@entry');
Route::post('doctor-notes/pass', 'DoctorsNotes@pass');
Route::get('doctor-notes/{id}/delete', ['as' => 'doctor-notes.delete', 'uses' => 'DoctorsNotes@destroy']);
Route::resource('doctor-notes', 'DoctorsNotes');

Route::resource('pharmacy', 'PharmacyView');


Auth::routes();

Route::get('/home', 'HomeController@index');
