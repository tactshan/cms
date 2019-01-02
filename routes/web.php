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

Route::get('/user/{id}','User\userController@user');
Route::get('/useradd','User\userController@useradd');
Route::get('/userup/{id}','User\userController@userUp');
Route::get('/userdel/{id}','User\userController@userDel');
Route::get('/view','User\userController@view');