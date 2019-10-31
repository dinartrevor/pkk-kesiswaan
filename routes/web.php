<?php
// Auth
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Admin
Route::get('/admin', 'DashboardController@index');

Route::get('/absensi', function () {
    return view('admin.absensi');
});


// Route::get('/login', function () {
//     return view('login');
// });

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

Route::get('/artikel', 'ArtikelController@index')->name('artikel');
Route::get('/new-artikel', 'ArtikelController@newArtikel');
Route::post('/add-artikel', [
    'uses' => 'ArtikelController@store',
    'as' => 'artikel.post'
]);
Route::get('/edit-artikel/{artikel}', 'ArtikelController@editArtikel');
Route::post('/update-artikel/{artikel}', [
    'uses' => 'ArtikelController@update',
    'as' => 'artikel.update'
    ]);
Route::get('/delete-artikel/{artikel}', 'ArtikelController@destroy');