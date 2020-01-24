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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile','user\profileController@index')->name('profile');
Route::get('/status','user\statusController@index')->name('status');
Route::get('/travel','user\statusController@travel')->name('travel');
Route::get('/experience','user\statusController@experience')->name('experience');
Route::get('/experience-details','user\statusController@experienceDetails')->name('experience-details');

