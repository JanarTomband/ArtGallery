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
    return view('home');
});

Route::get('/home', 'HomeController@index');

Route::get('/fresh', function () {
    return view('fresh');
});

Route::get('/trends', function () {
    return view('trends');
});

// Route::get('/Signin', function () {
//     return view('login');
// });

// Route::get('/Signup', function () {
//     return view('register');
// });


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
