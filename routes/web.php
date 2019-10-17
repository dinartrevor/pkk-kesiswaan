<?php
// Admin
Route::get('/admin', function () {
    return view('admin.index');
});

Route::get('/absensi', function () {
    return view('admin.absensi');
});

Route::get('/artikel', function () {
    return view('admin.artikel');
});


Route::get('/new-artikel', function () {
    return view('admin.newArtikel');
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
Route::resource('jurusan','JurusanController');
Route::resource('eskul','DaftareskulController');