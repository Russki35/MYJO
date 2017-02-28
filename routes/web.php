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
})->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index');

//Renvoie sur mon profil lorsque connecté
Route::get('/profile/', 'JournalistsController@showMyProfile')->name('profile_profile');

//Renvoie vers un profil tiers, depuis display
Route::get('/profile/{journalist}', 'JournalistsController@showProfileSomeone');

Route::get('/createprofile/', 'JournalistsController@create')->name('create_profile');

Route::post('/createprofile/', 'JournalistsController@store');

//Ajouté 18h07
/*Route::get('/displayprofile/', 'JournalistsController@showDisplay')->name('display_profile');*/


Route::get('/display', 'JournalistsController@showDisplay');

/*Route::post('')*/

// post qui vient du bouton 'modifier' sur 'mon profil'

/*Route::get('resizeImage', 'ImageController@resizeImage');

Route::post('resizeImagePost',['as'=>'resizeImagePost','uses'=>'ImageController@resizeImagePost']);
*/
