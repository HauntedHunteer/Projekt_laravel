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
    return view('startowa');
});
Route::get('/startowa', function () {
    return view('startowa');
});
Route::get('/asortyment', function () {
    return view('asortyment');
});
Route::get('/kontakt', function () {
    return view('kontakt');
});
Route::get('/formularz', function () {
    return view('formularz');
});
Route::get('/edycja', function () {
    return Redirect::to("startowa");
});

Route::get('login', 'AuthController@index');
Route::post('post-login', 'AuthController@postLogin');
Route::get('registration', 'AuthController@registration');
Route::post('post-registration', 'AuthController@postRegistration');
Route::get('formularz', 'AuthController@dashboard');
Route::get('logout', 'AuthController@logout');
Route::get('zamowienia', 'OrderController@zamowienia');
Route::post('post-zamowienie', 'OrderController@store');
Route::post('post-modyfikuj', 'OrderController@edit');
Route::post('post-edycja', 'OrderController@update');
Route::post('post-usun', 'OrderController@destroy');


