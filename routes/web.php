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

//Route::post('register', '\App\Http\Controllers\Auth\RegisterController@create')->name('register');

Auth::routes();
 
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/mon_compte', 'MonCompteController@index')->middleware('auth');
Route::post('/mon_compte', 'MonCompteController@update')->middleware('auth');

Route::get('/main', 'MainController@index')->middleware('auth');
Route::post('/main', 'MainController@selectWeek')->middleware('auth');
Route::post('/main/delete', 'MainController@deleteModule')->middleware('auth');
Route::post('/main/ajax', 'MainController@insertDrop')->middleware('auth');
Route::post('/main/calendar', 'MainController@calendar')->middleware('auth');
Route::post('/main/text', 'MainController@updateTextModule')->middleware('auth');
Route::post('/main/image', 'MainController@uploadImageModule')->middleware('auth');
Route::post('/main/design', 'MainController@insertDesignModule')->middleware('auth');
Route::post('/main/mood', 'MainController@insertMoods')->middleware('auth');



Route::get('/toDo', 'ToDoController@index')->middleware('auth');
Route::post('/toDo', 'ToDoController@insertToDo')->middleware('auth');
Route::post('/toDo/chooseCat', 'ToDoController@chooseCat')->middleware('auth');
Route::post('/toDo/delete', 'ToDoController@deleteToDo')->middleware('auth');
Route::post('/toDo/checkBox', 'ToDoController@checkBox')->middleware('auth');



Route::get('/contact', 'ContactController@index');

Route::get('/mood', 'MoodController@index');

Route::get('/admin', 'AdminController@index')->middleware('admin')->name('admin');
Route::get('/admin/delete', 'AdminController@deleteUser')->middleware('admin');
Route::get('/admin/update', 'UserUpdateController@index')->middleware('admin');
Route::post('/admin/update', 'UserUpdateController@userUpdate')->middleware('admin');


Route::post('/main/text', 'MainController@updateTextModule')->middleware('auth');
Route::post('/main/image', 'MainController@uploadImageModule')->middleware('auth');
Route::post('/main/design', 'MainController@insertDesignModule')->middleware('auth');



Route::get('/cgu', 'CguController@index');
Route::get('/ml', 'MlController@index');
