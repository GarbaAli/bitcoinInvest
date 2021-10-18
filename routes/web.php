<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});


Route::get('/register', 'MailModelController@index')->name('register');
Route::post('SendData', 'MailModelController@store')->name('sendData');
