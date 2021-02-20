<?php

use Illuminate\Support\Facades\Route;

// Home
Route::get('/', function() {
	return view('home');
})->name('home');

// About
Route::get('/about', function() {
	return view('about');
});

//login
Route::get('/login', 'AuthController@login')->name('login');
Route::post('/login', 'AuthController@postlogin')->name('postlogin');
Route::get('/logout', 'AuthController@logout')->name('logout');

//route grub berfungsi untuk mengatur halaman yang harus login, jadi tidak satu persatu buat middleware

Route::group(['middleware' => 'auth'], function(){

// Data
Route::resource('/datasiswa', 'siswaController')->middleware('auth');

//edit update dan delete data
Route::get('/data/{id}/edit', 'SiswaController@edit')->name('editData');
Route::post('/data/{id}/update', 'SiswaController@update')->name('updateData');
Route::get('/data/{id}/delete', 'SiswaController@destroy')->name('deleteData');

});

