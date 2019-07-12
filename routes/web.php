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

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/mon_compte', 'MonCompteController@index')->middleware('auth');
Route::post('/mon_compte', 'MonCompteController@update')->middleware('auth');

Route::get('/main', 'MainController@index')->middleware('auth');
Route::post('/main', 'MainController@selectWeek')->middleware('auth');
Route::post('/main/text', 'MainController@insertText')->middleware('auth');


Route::post('/main/calendar', 'MainController@calendar')->middleware('auth');

Route::get('/contact', 'ContactController@index');

Route::get('/mood', 'MoodController@index');
