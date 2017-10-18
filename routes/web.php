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

Route::post('signin', 'AppController@signin');
Route::post('signup', 'AppController@signup');
Route::get('signout', 'AppController@signout');

Route::get('admin/dashboard', 'AppController@dashboard');
Route::get('admin/about', 'AppController@about');

Route::resource('admin/tours', 'TourController');
Route::resource('admin/contacts', 'ContactController');
