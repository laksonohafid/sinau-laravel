<?php

use Illuminate\Support\Facades\Route;

// Home
Route::get('/', function() {
	return view('home');
});

// About
Route::get('/about', function() {
	return view('about');
});

// Data
Route::resource('/datasiswa', 'siswaController');

//edit update dan delete data
Route::get('/data/{id}/edit', 'SiswaController@edit')->name('editData');
Route::post('/data/{id}/update', 'SiswaController@update')->name('updateData');
Route::get('/data/{id}/delete', 'SiswaController@destroy')->name('deleteData');