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
    return view('index');
});

Route::view('index', 'index')->name('index');

Route::view('team', 'team')->name('team');

Route::view('portfolio', 'portfolio')->name('portfolio');

Route::view('login', 'login')->name('login');

Route::get('contactUs', 'ContactUSController@contactUS')->name('contactUs');
Route::post('contactUs', ['as'=>'contactus.store','uses'=>'ContactUSController@contactUSPost'])->name('contactUs');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
