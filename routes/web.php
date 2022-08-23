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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login/1', function () {
    return view('login1');
});
Route::get('/login/2', function () {
    return view('login2');
});
Route::get('/signup', function () {
    return view('signup');
});

Route::get('/dashboard/1', function () {
    return view('dashboard1');
});

Route::get('/dashboard/2', function () {
    return view('dashboard2');
});
Route::get('/package', function () {
    return view('package');
});
Route::get('/hris', function () {
    return view('hrisempinfo');
});
Route::get('/hris/register', function () {
    return view('hrisregister');
});
Route::get('/setting', function () {
    return view('setting');
});
Route::get('/setting/roles', function () {
    return view('roles');
});
Route::get('/setting/company', function () {
    return view('company');
});



