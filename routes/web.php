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

Route::post('/', 'IndexController@auth')->name('userAuthorize');

Route::get('contact', 'ContactController@contact');

Route::post('contact','ContactController@send')->name('contactSend');

Route::get('about', 'AboutController@about');

Route::get('testpage', 'TestpageController@testpage');

Route::post('testpage', 'TestpageController@storeOrShow')->name('resultStoreOrShow');

Route::get('guestbook', 'GuestbookController@guestbook');

Route::post('guestbook', 'GuestbookController@store')->name('entryStore');

Route::get('interests', 'InterestsController@interests');

Route::get('myblog', 'MyblogController@myblog');

Route::get('photo', 'PhotoController@photo');

Route::resource('registration', 'RegistrationController');

Route::resource('checklogin', 'CheckloginController');

Route::get('study', 'StudyController@study');

Route::resource('comment', 'CommentController', ['only'=>['store']] );

Route::get('admin', 'Admin\IndexAdminController@index');

Route::post('admin', 'Admin\IndexAdminController@auth')->name('adminAuthorize');

Route::resource('admin_blogeditor', 'Admin\BlogeditorAdminController');

Route::get('admin_blogloadfile', 'Admin\BlogloadfileAdminController@blogloadfile');

Route::post('admin_blogloadfile', 'Admin\BlogloadfileAdminController@load')->name('blogLoad');

Route::get('admin_guestbookloadfile', 'Admin\GuestbookloadfileAdminController@guestbookloadfile');

Route::post('admin_guestbookloadfile', 'Admin\GuestbookloadfileAdminController@load')->name('guestbookLoad');

Route::get('admin_statistics', 'Admin\StatisticsAdminController@statistics');

Route::get('admin_history', 'Admin\HistoryAdminController@history');
