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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'PagesController@index');

Route::get('blade','PagesController@blade');
Route::get('users',['uses' => 'UsersController@index']);



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>'authenticated'], function(){
	Route::get('profile','PagesController@profile');
	Route::get('settings','PagesController@settings');
	Route::get('users','UsersController@index');
});
