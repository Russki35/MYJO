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

Route::get('/profile/', 'JournalistsController@show')->name('profile_profile');

Route::get('/profile/{journalist}', 'JournalistsController@show');

Route::get('/createprofile/', 'JournalistsController@create')->name('create_profile');

Route::post('/createprofile/', 'JournalistsController@store');

//Ajouté 18h07
/*Route::get('/displayprofile/', 'JournalistsController@showDisplay')->name('display_profile');*/


Route::get('/display', 'JournalistsController@showDisplay');

// post qui vient du bouton 'modifier' sur 'mon profil'

