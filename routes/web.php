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

Route::get('/', 'PageController@index');
Route::get('index.html', function () {
    return redirect('/');
});
Route::get('dr', 'PageController@dr');
Route::get('the-team', 'PageController@team');
Route::get('services', 'PageController@services');
Route::get('sleep-center', 'PageController@sleepCenter');
Route::get('financial-info', 'PageController@financial');
Route::get('patient-forms', 'PageController@patientForms');
Route::get('testimonials', 'PageController@testimonials');

URL::asset('pdf/RECORD-RELEASE-TO-PATIENT.pdf');
URL::asset('pdf/RECORD-RELEASE-TO-THIRD-PARTY.pdf');
