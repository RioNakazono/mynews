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
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function() {
    Route::get('news/create', 'Admin\NewsController@add');
});


//課題３
Route::get('XXX', 'AAAController@bbb');


//課題４
Route::group(['prefix' => 'admin/profile'], function() {
    Route::get("create", 'ProfileController@add');
    Route::get("edit", 'ProfileController@edit');
});