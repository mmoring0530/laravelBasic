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


//注文管理
Route::get('/order', 'OrderController@list');

//予約管理
Route::get('/reservation', 'ReservationController@list');

//加盟店管理
Route::get('/mdmanager', 'MdmanagerController@list');



//manage route resource
//Route::resource('tasks', 'TaskController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//google oAuth
Route::get('auth/google', 'Auth\LoginController@redirectToProvider');
Route::get('auth/google/callback', 'Auth\LoginController@handleProviderCallback');

