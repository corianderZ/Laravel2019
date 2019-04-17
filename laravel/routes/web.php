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

Route::get('/hello/{id}',function($id){
    return "hello world >.< ";
});

Route::get('/adminlogin','Admin\LoginController@getlogin');
Route::post('/checklogin','Admin\LoginController@checkLogin');
