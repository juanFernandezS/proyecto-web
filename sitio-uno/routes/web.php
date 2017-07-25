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



Route::group(['prefix' => 'admin'], function(){

    Route::resource('news','NewsController');
    Route::get('news/{id}/destroy',[
        'uses'=>'NewsController@destroy',
        'as'=>'admin.news.destroy'
    ]);

});

Route::group(['prefix' => 'public'], function(){

    Route::resource('users','UsersController');
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
