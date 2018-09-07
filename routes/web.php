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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'auth/{provider}'], function(){
    Route::get('redirect', 'SocialAuthController@redirect');
    Route::get('callback', 'SocialAuthController@callback');
    Route::post('register', 'SocialAuthController@register');
});

Route::group(['middleware' => 'auth'], function(){
		Route::get('profile', 'ProfileController@index');
		Route::post('profile', 'ProfileController@store');
		Route::get('my-services', 'ServiceController@index');

		Route::resources([
			'clients' => 'ClientController'
		]);
});