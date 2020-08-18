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

Route::group(['middleware' => ['auth', 'checkRole:superadmin']],function(){

    //Users
    Route::get('/users','UsersController@index');
    Route::get('getusers', [
        'uses' => 'UsersController@getusers',
        'as' => 'ajax.get.data.users',
    ]);
    Route::post('/users/insert','UsersController@insert');
    Route::get('/users/{user}/edit','UsersController@edit');
    Route::post('/users/{user}/update','UsersController@update');
    Route::get('/users/{user}/delete','UsersController@delete');
});

Route::group(['middleware' => ['auth', 'checkRole:superadmin,admin']],function(){

    Route::get('/home', 'HomeController@index');

    //Students
    Route::get('/students','StudentsController@index');
    Route::get('getstudents', [
        'uses' => 'StudentsController@getstudents',
        'as' => 'ajax.get.data.students',
    ]);
    Route::get('search', [
        'uses' => 'StudentsController@search',
        'as' => 'ajax.search.data.students',
    ]);
    Route::post('/students/insert','StudentsController@insert');
    Route::get('/students/{students}/edit','StudentsController@edit');
    Route::post('/students/{students}/update','StudentsController@update');
    Route::get('/students/{students}/delete','StudentsController@delete');
});
