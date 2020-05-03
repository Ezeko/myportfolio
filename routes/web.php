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

Route::get('/', 'HomeController@landingPage');

Route::get('/user/register', 'RegisterController@registerPage');

Route::post('/register/createuser', 'RegisterController@create_user');

Route::post('/loguser', 'LoginController@log_user');

//dashboard 
Route::get('/{user}', 'LoginController@dashboard');

//logout 

Route::get('/dashboard/logout', 'LoginController@logout')->name('logout');