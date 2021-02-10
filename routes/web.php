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

//Route::get('/', function () {
//    return view('index');
//});

//Route::get('/','AdminController@home')->name('index');
//Route::get('/request','AdminController@request')->name('request');
//Route::get('/donate','AdminController@donate')->name('donate');
//Route::get('/aboutus','AdminController@aboutus')->name('aboutus');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
Route::middleware('auth')->group(function (){
    Route::get('/','BloodRequestController@index')->name('index');
    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/admin/dashboard','AdminController@index')->name('admin.index');

    Route::get('/admin/user','UserController@index')->name('user.index');
    Route::get('/admin/user/create','UserController@create')->name('user.create');
    Route::post('/admin/user/store','UserController@store')->name('user.store');
    Route::get('/admin/user/{user}/edit','UserController@edit')->name('user.edit');
    Route::patch('/admin/user/{user}/update','UserController@update')->name('user.update');
    Route::delete('/admin/user/{user}/destroy','UserController@destroy')->name('user.destroy');

    Route::get('/admin/request','BloodRequestController@adminIndex')->name('admin.request.index');
    Route::get('/admin/request/create','BloodRequestController@adminRequestCreate')->name('admin.request.create');
    Route::post('/admin/request/store','BloodRequestController@adminRequestStore')->name('admin.request.store');
    Route::get('/admin/request/{bloodRequest}/edit','BloodRequestController@adminRequestEdit')->name('admin.request.edit');
    Route::put('/admin/request/{bloodRequest}/update','BloodRequestController@adminRequestUpdate')->name('admin.request.update');
    Route::delete('/admin/request/{bloodRequest}/delete','BloodRequestController@destroy')->name('admin.request.destroy');

    Route::get('/admin/donation','BloodDonationController@adminIndex')->name('admin.donation.index');
    Route::delete('/admin/donation/{bloodDonation}/delete','BloodDonationController@destroy')->name('admin.donation.destroy');

    Route::get('/request/create','BloodRequestController@create')->name('request.create');
    Route::post('/request/store','BloodRequestController@store')->name('request.store');

    Route::get('/donation','BloodRequestController@showAll')->name('request.showall');

    Route::get('/donation/{bloodRequest}/create','BloodDonationController@fetchByRequest')->name('donation.create');
    Route::post('/donation/store','BloodDonationController@store')->name('donation.store');


});




