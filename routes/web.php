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
Route::get('/experience-details','user\statusController@experienceDetails')->name('experience.details');
Route::get('/traveller-list','user\profileController@travellerList')->name('travellerList');

//update
Route::post('/profile-social-manage/{id}', 'user\profileController@profileSocialManage')->name('profile.social.manage');
Route::post('/profile-address-manage/{id}', 'user\profileController@profileAddressManage')->name('profile.address.manage');
Route::post('/profile-bio-manage/{id}', 'user\profileController@profileBioManage')->name('profile.bio.manage');

//status post
Route::post('/status-post', 'user\statusController@statusPost')->name('status.post');

//delete post
Route::post('/status-delete/{id}','user\statusController@statusDelete')->name('status-delete');

//update post
Route::get('/status-edit/{id}','user\statusController@statusEdit')->name('status.edit');
Route::post('/status-update/{id}','user\statusController@statusUpdate')->name('status.update');
