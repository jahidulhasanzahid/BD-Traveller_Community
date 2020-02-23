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
<<<<<<< HEAD

Route::get('/experience','user\travelController@experience')->name('experience');
Route::get('/experience-details/{title}','user\travelController@experienceDetails')->name('experience.details');
Route::get('/traveller-list','user\travelController@travellerList')->name('travellerList');
Route::get('/traveler/{id}', 'user\travelController@travelerProfile')->name('traveler.profile');

=======
Route::get('/travel','user\statusController@travel')->name('travel');
Route::get('/experience','user\statusController@experience')->name('experience');
Route::get('/experience-details','user\statusController@experienceDetails')->name('experience.details');
Route::get('/traveller-list','user\profileController@travellerList')->name('travellerList');

>>>>>>> 3886e9c78b42a7b4906f1ff9283eaf8ba87fcf22
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
<<<<<<< HEAD

//search
Route::get('/search', 'user\searchController@search')->name('search');
=======
>>>>>>> 3886e9c78b42a7b4906f1ff9283eaf8ba87fcf22
