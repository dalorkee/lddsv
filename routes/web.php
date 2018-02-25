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

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');
/* Route::get('/', function () {
	return view('front.index');
});
*/
Route::get('/backend', function() {
	return view('backend.dashboard');
});
Route::get('/lddsv', function () {
	return view('frontend.index');
});
Route::get('/service', function () {
	return view('frontend.service');
});
