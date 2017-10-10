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

Route::get('/', 'IndexController@index');

Route::get('contact', 'ContactController@contact');

Route::post('contact','ContactController@send')->name('contactSend');

Route::get('about', 'AboutController@about');

Route::get('testpage', 'TestpageController@testpage');

Route::post('testpage', 'TestpageController@storeOrShow')->name('resultStoreOrShow');

Route::get('guestbook', 'GuestbookController@guestbookShow');

Route::post('guestbook', 'GuestbookController@store')->name('entryStore');

Route::get('interests', 'InterestsController@interests');

Route::get('myblog', 'MyblogController@myblog');

Route::get('photo', 'PhotoController@photo');

Route::get('registration', 'RegistrationController@registration');

Route::get('study', 'StudyController@study');
