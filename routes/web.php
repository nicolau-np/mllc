<?php

use Illuminate\Support\Facades\Route;

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


Route::group(['prefix'=>"user"], function(){
    Route::get('/login', "UsuarioController@index");
});


Route::get('/', "HomeController@index");

Route::get('/sobre', "HomeController@sobre");