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



Route::get('/','TasksController@index')->name('index');
Route::post('/','TasksController@store')->name('store');
Route::delete('/{task:id}','TasksController@destroy')->name('destroy');
Route::get('/restore/{id}','TasksController@restore')->name('restore');
Route::get('/{id}','TasksController@edit')->name('edit');
Route::patch('/{id}','TasksController@update')->name('update');
