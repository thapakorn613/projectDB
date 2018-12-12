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

Route::get('/center', function () {
    return view('center');
});
// chooseController
Route::any('/chooseLoginForm', 'chooseLoginController@LoginForm');

// HomeController
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('users/logout','Auth\LoginController@userlogout')->name('user.logout');

// gpController
Route::any('showOperation', 'gpController@showOperation');
Route::any('myPatient', 'gpController@myPatient');
Route::any('mySchedule', 'gpController@mySchedule');

// staffController
Route::any('nurse/showOperation', 'staffController@operation_Nurse');
Route::any('surgeons/showOperation', 'staffController@operation_Surgeons');
Route::any('anesthetists/showOperation', 'staffController@operation_Anesthetists');

// profileController

// UserController
Route::resource('user', 'UsersController');
Route::any('manager', 'UsersController@manager');
Route::any('destroy/{id}', 'UsersController@destroy');
Route::any('me/{id?}', 'UsersController@me');
Route::any('adddoctor', 'UsersController@adddoctor');
Route::any('update/{id}', 'UsersController@update');
Route::any('update_to_database/{id}', 'UsersController@update_to_database');
Route::any('search', 'UsersController@search');
Route::any('index/{id}', 'UsersController@index');
Route::any('adddoctor', 'UsersController@adddoctor');
Route::any('user_login', 'UsersController@user_login');
Route::any('patient_login', 'UsersController@patient_login');
Route::any('login_patien', 'UsersController@login');
Route::any('addrestroom', 'UsersController@addrestroom');
Route::any('updateroom/{id}', 'UsersController@updateroom');
Route::any('cancelroom/{id}', 'UsersController@cancelroom');
Route::any('showroom/{id}', 'UsersController@showroom');

// OperationController
Route::get('/check-model','operationController@getIndex');
Route::any('operationShow/{operation_id}','operationController@operationShow');
Route::any('addrestroom', 'UsersController@addrestroom');
Route::any('updateroom/{id}', 'UsersController@updateroom');
Route::any('cancelroom/{id}', 'UsersController@cancelroom');
Route::any('showroom/{id}', 'UsersController@showroom');
Route::any('printciple/{id}', 'UsersController@printciple');
Route::any('meet', 'UsersController@meet');
Route::any('addmeet', 'UsersController@addmeet');

Route::any('center', 'pageController@center');
Route::any('healthExpert', 'pageController@healthExpert');
Route::any('aboutAs', 'pageController@aboutAs');
Route::any('updatedoctor/{id}', 'UsersController@updatedoctor');
Route::any('showdoctor/{id}', 'UsersController@showdoctor');
