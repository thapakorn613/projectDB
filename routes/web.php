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

Route::get('/', 'HomeController@index')->name('home');

/*
Route::get('/createAccount', function () {
    return view('createAccount');
});
*/
Route::get('/update', function () {
    return view('update');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('user', 'UsersController');

	
Route::any('destroy/{id}', 'UsersController@destroy');
Route::any('me/{id?}', 'UsersController@me');
Route::any('adddoctor/{id?}', 'UsersController@adddoctor');
Route::any('update/{id}', 'UsersController@update');
Route::any('update2/{id}', 'UsersController@update2');
Route::any('search', 'UsersController@search');
Route::any('index', 'UsersController@index');
Route::any('adddoctor', 'UsersController@adddoctor');

Route::get('/check-model','operationController@getIndex');
Route::any('operationShow/{operation_id}','operationController@operationShow');
