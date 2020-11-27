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
    return view('beranda');
});

Route::get('/member', function () {
    return view('index');
});


//Route crud
Route::get('/member','MemberController@index');
Route::get('/tambah', 'MemberController@create');
Route::post('/member', 'MemberController@store');


























// Route::get('/', function () {
//     return view('welcome');
// });

// // closure
// Route::get('/profil', function(){
//     return "ini adalah profile siswa";
// })->name('profil');

// // Route name
// Route::get('/tesname', function(){
//     return route('profil');
// });

// // Parameter
// Route::get('/profil/{id}', function($id){
//     return $id;
// });

// // Controller
// Route::get("/tescontroller", "TesController@show");

// // Resource
// Route::resource('siswa', "SiswaController");