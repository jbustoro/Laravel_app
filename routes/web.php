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
    return view('/pages/home');
});
Route::get('/pages/signUp', function () {
    return view('/pages/signUp');
});
Route::get('/pages/login', function () {
    return view('/pages/login');
});
Route::get('/pages/home', function () {
    return view('/pages/home');
});
