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

Route::get('/', function () {
    return view('login');
});

Route::get('/login', 'AuthController@login')->name('login');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');

Route::group(['middleware' => 'auth'],function(){
    Route::get('/home', 'HomeController@index');

    //Students
    Route::get('/students','StudentsController@index');
    Route::post('/students/insert', 'StudentsController@insert');
    Route::get('/students/{id}/edit','StudentsController@edit');
    Route::post('/students/{id}/update','StudentsController@update');
    Route::get('/students/{id}/delete','StudentsController@delete');
});


