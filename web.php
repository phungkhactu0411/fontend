<?php

use Illuminate\Support\Facades\Route;

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

Route::get('login', function () {
    return view('logout');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('admin_login');
});

Route::post('admin_layout1','AdminController@admin_layout1');

Route::post('admin_layout1', function () {
    return view('admin_layout1');
});
