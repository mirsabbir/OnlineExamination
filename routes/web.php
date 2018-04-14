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



Route::get('profile/{userid}', 'ProfileController@index')->name('profile');
Route::get('/settings','SettingsController@index')->name('settings');
Route::get('/contests','ContestsController@index')->name('contests');
Route::post('/settings','SettingsController@store')->name('settings.store');
Route::get('/contest/{contestName}','ExamController@index')->name('exam');


Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
