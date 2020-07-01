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

Route::get('/','user\travelController@welcome')->name('');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile','user\profileController@index')->name('profile');
Route::get('/status','user\statusController@index')->name('status');

Route::get('/experience','user\travelController@experience')->name('experience');
Route::get('/experience-details/{title}','user\travelController@experienceDetails')->name('experience.details');
Route::get('/traveller-list','user\travelController@travellerList')->name('travellerList');
Route::get('/traveler/{id}', 'user\travelController@travelerProfile')->name('traveler.profile');

//profile photo
Route::post('/profile-photo-upload','user\profileController@profilePhoto')->name('profile.photo');
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

//search
Route::get('/search', 'user\searchController@search')->name('search');
