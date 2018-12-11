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

Auth::routes();


/*
Route::get('/createAccount', function () {
    return view('createAccount');
});
*/
Route::get('/update', function () {
    return view('update');
});

// HomeController
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');


// gpController
Route::any('showOperation', 'gpController@showOperation');
Route::any('myPatient', 'gpController@myPatient');
Route::any('mySchedule', 'gpController@mySchedule');



Route::resource('user', 'UsersController');

Route::resource('user2', 'UsersAllController');


Route::any('manager', 'UsersController@manager');
Route::any('destroy/{id}', 'UsersController@destroy');
Route::any('me/{id?}', 'UsersController@me');
Route::any('adddoctor', 'UsersController@adddoctor');
Route::any('update/{id}', 'UsersController@update');
Route::any('update_to_database/{id}', 'UsersController@update_to_database');
Route::any('search', 'UsersController@search');
Route::any('index', 'UsersController@index');
Route::any('adddoctor', 'UsersController@adddoctor');
Route::any('user_login', 'UsersController@user_login');
Route::any('patient_login', 'UsersController@patient_login');
Route::any('login_patien', 'UsersController@login');
Route::any('addrestroom', 'UsersController@addrestroom');
Route::any('updateroom/{id}', 'UsersController@updateroom');
Route::any('cancelroom/{id}', 'UsersController@cancelroom');
Route::any('showroom/{id}', 'UsersController@showroom');

Route::any('destroy2/{id}', 'UsersAllController@destroy');
Route::any('me2/{id?}', 'UsersAllController@me');
Route::any('adddoctor2/{id?}', 'UsersAllController@adddoctor');
Route::any('update2/{id}', 'UsersAllController@update');
Route::any('update_to_database2/{id}', 'UsersAllController@update_to_database');
Route::any('search2', 'UsersAllController@search');
Route::any('index2', 'UsersAllController@index');
Route::any('adddoctor2', 'UsersAllController@adddoctor');

Route::get('/check-model','operationController@getIndex');
Route::any('operationShow/{operation_id}','operationController@operationShow');
Route::any('addrestroom', 'UsersController@addrestroom');
Route::any('updateroom/{id}', 'UsersController@updateroom');
Route::any('cancelroom/{id}', 'UsersController@cancelroom');
Route::any('showroom/{id}', 'UsersController@showroom');
Route::any('printciple/{id}', 'UsersController@printciple');

