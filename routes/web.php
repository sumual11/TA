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
    return view('frontend/pages/index');
});
Route::get('/home', function() {
    return view('frontend/pages/home');
});

Route::resource('users', 'UserController');


Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
