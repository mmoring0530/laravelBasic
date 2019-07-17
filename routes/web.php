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

Route::get('/', 'TaskController@index');
Route::get('/hello', 'HomeController@hello');
Route::get('/contect', 'HomeController@contect');

Route::prefix('tasks')->middleware('auth')->group(function(){
    //index create
    Route::get('/', 'TaskController@index');

    //move tasks
    Route::get('/create', 'TaskController@create');

    //create tasks
    Route::post('/', 'TaskController@store');

    //detail tasks
    Route::get('/{task}', 'TaskController@show');

    //edit tasks
    Route::get('/{task}/edit', 'TaskController@edit');

    //update tasks
    Route::put('/{task}', 'TaskController@update');

    //delete tasks
    Route::delete('/{task}', 'TaskController@destroy');
});

//manage route resource
//Route::resource('tasks', 'TaskController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
