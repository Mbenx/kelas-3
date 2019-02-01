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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/home/{id}', 'HomeController@show');

// Route::get('/home', function () {
//     return view('home');
// });

// Route::get('/foo', function () {
//     return 'Hello World';
// });



Route::get('/', 'HomeController@index');

Route::get('/department', 'DepartmentController@index');
Route::get('/department/show/{id}', 'DepartmentController@show');

Route::get('/position', 'PositionController@index');
Route::get('/position/show/{id}', 'PositionController@show');
Route::get('/position/create', 'PositionController@create');
Route::post('/position/store', 'PositionController@store');

Route::get('/employee', 'EmployeeController@index');
// Route::get('/employee/create', 'EmployeeController@create');
// Route::post('/employee/store', 'EmployeeController@store');

// Route::get('/employee/edit/{id}', 'EmployeeController@edit');
// Route::put('/employee/update', 'EmployeeController@update');

// Route::get('/employee/destroy/{id}', 'EmployeeController@destroy');


