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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index');
});

Route::get('signin', function () {
    return view('signin');
});

Route::get('signup', function () {
    return view('signup');
});

Route::get('profile', function () {
    return view('profile');
});

Route::get('about', function () {
    return view('about');
});

Route::post('signin', 'AppController@signin');
Route::post('signup', 'AppController@signup');
Route::put('profile/edit', 'AppController@profile');
Route::get('signout', 'AppController@signout');
Route::get('contact', 'AppController@contact');

Route::get('admin/dashboard', 'AdminController@dashboard');
Route::get('admin/about', 'AdminController@about');
Route::put('admin/about', 'SettingController@about');
Route::get('admin/contact', 'AdminController@contact');
Route::put('admin/contact', 'SettingController@contact');

Route::resource('admin/tours', 'TourController');
Route::resource('admin/contacts', 'ContactController');
