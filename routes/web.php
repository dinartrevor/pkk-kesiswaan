<?php

use App\Students;
// Auth
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth', 'checkRole:admin,penulis,pengurus']], function () {
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
  
    // kategori artikel
    Route::get('/kategori', 'KategoriController@index');
    Route::post('/kategori/add-kategori', 'KategoriController@store')->name('kategori');
    
    // siswa
    Route::get('/siswa', function () {
        $students = Students::all();
        return view('admin.students.index', compact('students'));
    });

    // forums
    Route::get('/forums', 'ForumsController@index')->name('forums');
    Route::get('/forums/new-forums', 'ForumsController@newForums');
    
    
    
});

Route::group(['middleware' => ['auth', 'checkRole:admin,penulis,pengurus,user']], function () {
    // comment article
    

    // Ekskul
    Route::get('/extracurricular', 'ExtracurricularController@index');
    Route::get('/extracurricular/new-extracurricular', 'ExtracurricularController@create');
    Route::post('/extracurricular/new-extracurricular/add-extracurricular', 'ExtracurricularController@store')->name('extracurricular');
    Route::get('/extracurricular/edit-extracurricular/{extracurricular}', 'ExtracurricularController@edit');
    Route::post('/extracurricular/edit-extracurricular/{extracurricular}/update-extracurricular', 'ExtracurricularController@update')->name('extracurricular.update');
    Route::get('/extracurricular/delete-extracurricular/{extracurricular}', 'ExtracurricularController@destroy');
    Route::get('/extracurricular/show-extracurricular/{extracurricular}', 'ExtracurricularController@show')->name('extracurricular.show');

    // forums
    Route::post('/comment/{forums}/add-forumComment', 'CommentsForumsController@store')->name('forum.addComent');
    Route::post('/forums/reply_comment', 'ForumsController@reply_comment')->name('reply_comment');
    Route::get('/forums/destroy_comments_forums/{comments_forums_id}', 'ForumsController@destroy_comments_forums')->name('destroy_comments_forums');
    Route::post('/forums/store','ForumsController@store')->name('addforums');
    Route::post('/comment/{artikel}/add-comment', 'commentArticleController@store')->name('addComent');
});

// User

Route::get('/forums/show/{forums}', 'ForumsController@show');
Route::get('/artikel/show/{artikel}', 'ArtikelController@show');

Route::get('/', function () {
    return view('user.index');
});
Route::get('/', 'ArtikelController@homeUser');
Route::get('/tentang', function () {
    return view('user.tentang');
});
Route::get('/members', 'MembersController@index');
Route::get('/members/{extracurricular}', 'MembersController@create');
Route::post('/members/{extracurricular}/new-member', 'MembersController@store')->name('member');

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    '\vendor\uniSharp\LaravelFilemanager\Lfm::routes()';
});
Route::get('/articles', 'ArtikelController@user');
Route::get('/forum', 'ForumsController@forumUser');

