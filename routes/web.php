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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', function () {
    return view('firsthome');
});

Route::get('/contact', 'FirstController@contact')->name('contact');
Route::get('/about', 'FirstController@about')->name('about');
Route::get('/team', 'FirstController@team')->name('team');
Route::get('/pricing', 'FirstController@pricing')->name('pricing');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/password-change', 'HomeController@changePassword')->name('password.change');
Route::post('/password-update', 'HomeController@updatePassword')->name('password.update');
Route::get('/user/logout', 'HomeController@Logout')->name('user.logout');
