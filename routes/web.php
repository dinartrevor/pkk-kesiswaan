<?php
<<<<<<< HEAD

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
=======
use App\Students;
// Auth
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth','checkRole:admin,penulis,pengurus']], function () {
    // Admin
    Route::get('/admin', 'DashboardController@index');
    
    // artikel
    Route::get('/artikel', 'ArtikelController@index')->name('artikel');
    Route::get('/artikel/new-artikel', 'ArtikelController@newArtikel');
    Route::post('/artikel/add-artikel', [
        'uses' => 'ArtikelController@store',
        'as' => 'artikel.post'
    ]);
    Route::get('/artikel/edit-artikel/{artikel}', 'ArtikelController@editArtikel');
    Route::post('/artikel/update-artikel/{artikel}', [
        'uses' => 'ArtikelController@update',
        'as' => 'artikel.update'
        ]);
    Route::get('/artikel/delete-artikel/{artikel}', 'ArtikelController@destroy');
    
    Route::get('/kategori', 'KategoriController@index');
    Route::post('/kategori/add-kategori', 'KategoriController@store')->name('kategori');
    // siswa
    Route::get('/siswa', function(){
        $students = Students::all();
        return view('admin.students.index', compact('students'));
    });
>>>>>>> desain_baru
});

// User
Route::get('/', function () {
    return view('user.index');
});
<<<<<<< HEAD

Route::get('/detail-events', function () {
    return view('user.detail_events');
});

=======
>>>>>>> desain_baru
Route::get('/events', function () {
    return view('user.events');
});
Route::get('/ekskul', function () {
    return view('user.eskul');
});

Route::get('/tentang', function () {
    return view('user.tentang');
});
<<<<<<< HEAD

Route::get('/verify-akun', function () {
    return view('verify_akun');
});

Route::get('/detail', function () {
    return view('user.detail_artikel');
});

=======
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    '\vendor\uniSharp\LaravelFilemanager\Lfm::routes()';});
    
>>>>>>> desain_baru
