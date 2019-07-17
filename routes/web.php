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

Route::get('/', 'HomeController@index');
Route::get('/hello', 'HomeController@hello');
Route::get('/contect', 'HomeController@contect');

//index create
Route::get('/tasks', 'TaskController@index')->middleware('auth');;

//move tasks
Route::get('/tasks/create', 'TaskController@create');

//create tasks
Route::post('/tasks', 'TaskController@store');

//detail tasks
Route::get('/tasks/{task}', 'TaskController@show');

//edit tasks
Route::get('/tasks/{task}/edit', 'TaskController@edit');

//update tasks
Route::put('/tasks/{task}', 'TaskController@update');

//delete tasks
Route::delete('/tasks/{task}', 'TaskController@destroy');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
