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
Route::get('/buysalerent', function () {
    return view('buysalerent');
});
Route::get('/property-detail', function () {
    return view('property-detail');
});

Route::get('/nav', function () {
    return view('layouts/topnavside');
});
Route::get('/annonce', function () {
    return view('vendor/adminlte/Annonce');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('login', ['as'=>'login','uses'=>'LoginController@login']);
Route::post('login', ['as'=>'login.store','uses'=>'LoginController@loginPost']);


Route::get('register',  ['as'=>'signup','uses'=>'SigupController@sigup']);
Route::post('register', ['as'=>'signup.store','uses'=>'SigupController@sigupPost']);
