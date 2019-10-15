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


// Admin

Route::resource('jurusan','JurusanController');
Route::resource('eskul','DaftareskulController');
Route::resource('kategori','KategoriController');
Route::get('/admin', 'DashboardController@index');
Route::resource('forums', 'ForumsController');
Route::resource('comments', 'CommentsController');

Route::get('/absensi', function () {
    return view('admin.absensi');
});

Route::get('/artikel', function () {
    return view('admin.artikel');
});

Route::get('/form', function () {
    return view('admin.form');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/lupa', function () {
    return view('lupa_password');
});

Route::get('/verify-password', function () {
    return view('verify_password');
});

// User
Route::get('/', function () {
    return view('user.index');
});

Route::get('/detail-events', function () {
    return view('user.detail_events');
});

Route::get('/events', function () {
    return view('user.events');
});

Route::get('/ekskul', function () {
    return view('user.eskul');
});

Route::get('/tentang', function () {
    return view('user.tentang');
});

Route::get('/verify-akun', function () {
    return view('verify_akun');
});

Route::get('/detail', function () {
    return view('user.detail_artikel');
});

