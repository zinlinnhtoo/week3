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

Route::resource('receipe', 'ReceipeController');

//Route::get('receipe', 'ReceipeController@index');
//Route::post('receipe', 'ReceipeController@create');
//Route::get('create_receipe', 'ReceipeController@createReceipeForm');

//Route::get('php', 'HomeController@phppage');
//Route::get('js', 'HomeController@jspage');
