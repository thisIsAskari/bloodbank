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

Route::get('/', function () {
    return view('index');
});
Route::get('/','AdminController@home')->name('index');
Route::get('/request','AdminController@request')->name('request');
Route::get('/donate','AdminController@donate')->name('donate');
Route::get('/aboutus','AdminController@aboutus')->name('aboutus');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/dashboard','AdminController@index')->name('admin.index');

Route::get('/admin/user','UserController@index')->name('user.index');
Route::get('/admin/user/create','UserController@create')->name('user.create');
Route::post('/admin/user/store','UserController@store')->name('user.store');
Route::get('/admin/user/{user}/edit','UserController@edit')->name('user.edit');
Route::patch('/admin/user/{user}/update','UserController@update')->name('user.update');
Route::delete('/admin/user/{user}/destroy','UserController@destroy')->name('user.destroy');



