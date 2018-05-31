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

Route::resource('passports','PassportController');

Route::get('createcaptcha', 'CaptchaController@create');
Route::post('captcha', 'CaptchaController@captchaValidate');
Route::get('refreshcaptcha', 'CaptchaController@refreshCaptcha');



Route::get('/downloadPDF/{id}','PassportController@downloadPDF');
Route::get('/word/{id}','PassportController@word');

Route::post('submitForm','UserDetailController@store');


