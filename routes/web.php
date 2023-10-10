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

Route::get('/vv', function () {
    return view('ex');
});
Route::get('/', function () {
    return view('dashboard');
});
//Route::get('/sl','SoalController@login');
//});
Route::get('/reg', function () {
    return view('regist');
});
Route::get('/prep', function () {
    return view('prep');
});
Route::get('/grap', function () {
    return view('grapik');
});
Route::get('/log_in', 'SoalController@login');


Route::get('/tes1', function () {
    return view('pilih');
});

Route::post('/tes2','SoalController@tes2');

Route::get('/i_soal','SoalController@isoal');
Route::get('/ambil4','SoalController@ambil4');
Route::get('/ambil3','SoalController@ambil3');

Route::get('/soal3','SoalController@soal3');
Route::post('/jsoal3','SoalController@jsoal3');
Route::get('/saya','SoalController@saya');
Route::get('/ceku/{u}','SoalController@ceku');
Route::post('/tambahu','SoalController@tambahu');
Route::get('/users','SoalController@users');
Route::get('/logo','SoalController@logo');
Route::post('/upex','SoalController@upex');
Route::post('/upuser','SoalController@upprofil');
Route::get('/trf','SoalController@tarif');
Route::post('/inputsoal','SoalController@input');
Route::get('/d_admin','SoalController@admin');
Route::get('/edit_s/{s}','SoalController@edits');
Route::get('/hapus_s/{s}','SoalController@hapuss');
Route::get('/edits_s/{s}','SoalController@editss');
Route::post('/update_s','SoalController@updates');
Route::get('/prof','SoalController@profile');
Route::get('/rest','SoalController@getresult');
Route::post('/updacc','SoalController@updatepro');
Route::post('/goexam','SoalController@ambilsoal');
Route::post('/goresult','SoalController@result');
Route::post('/regacc','SoalController@regacc');
Route::post('/golog','SoalController@gologin');
Route::get('/tambah','Jadwal_Controller@tambah');
Route::post('/tambah_jadwal','Jadwal_Controller@tambah_jadwal');
Route::post('/dofilter','Jadwal_Controller@dofilter');
Route::get('/ubah/{id}','Jadwal_Controller@ubah');
Route::get('/afterfilter','Jadwal_Controller@afterfilter');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
