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

use App\Http\Middleware\Soap\PassportVerify;

Route::get('/', function () {
//    $value = session(PassportVerify::PASSPORT_AUTHENTICATED);
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/soap/login', 'PassportController@login')->name('soap_login');
Route::get('/soap/register', 'PassportController@register')->name('soap_register');
Route::get('/soap/test', 'PassportController@test')->name('soap_test');
