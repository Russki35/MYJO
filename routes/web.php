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

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/profile/', 'JournalistsController@show');

Route::get('/profile/{journalist}', 'JournalistsController@showUser');

Route::get('/createprofile/', 'JournalistsController@create');

Route::post('/createprofile/', 'JournalistsController@store');

// post qui vient du bouton 'modifier' sur 'mon profil'

