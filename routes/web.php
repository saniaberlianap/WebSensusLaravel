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

// route halaman awal (landingpage)
Route::get('/', function () {
    return view('awal');
});


// route resource controller
Route::resource('crud', 'CrudsController');

Route::resource('keluarga', 'KeluargaController');


// Route halaman next ke lihat data untuk user
Route::get('/dataanak', 'DataController@index')->name('dataanak');


// Route apabila admin sudah login (belum logout), admin tidak bisa mengakses halaman login dan register

Route::group(['middleware' => ['logged']], function(){

    Route::get('/login', 'HomeController@login')->name('login');

    Route::get('/register', 'HomeController@register' )->name('register');

    Route::post('signin', 'UserController@login');

    Route::post('/user/add', 'UserController@store');

});


// route untuk admin yang belum login, dimana admin tidak bisa akses

Route::group(['middleware' => ['admin']], function(){

    Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');


    Route::get('/crud', 'CrudsController@index')->name('crud.index');

    Route::post('/crud/create', 'CrudsController@create')->name('crud.create');

    Route::post('/crud/{id}/update', 'CrudsController@update')->name('crud.update');

    Route::get('/crud/{id}/edit', 'CrudsController@edit')->name('crud.edit');

    Route::get('/crud/{id}/delete', 'CrudsController@delete')->name('crud.delete');

    Route::get('/crud/{id}/profile', 'KeluargaController@profile');

    Route::get('/export/export_excel2', 'ExportController@export_excel2');

    Route::get('/export/cetak_pdf2', 'ExportController@cetak_pdf2');



    Route::get('/keluarga', 'KeluargaController@index')->name('keluarga.index');

    Route::post('/keluarga/create', 'KeluargaController@create')->name('keluarga.create');

    Route::get('/keluarga/{id}/edit', 'KeluargaController@edit')->name('keluarga.edit');

    Route::post('/keluarga/{id}/update', 'KeluargaController@update')->name('keluarga.update');

    Route::get('/keluarga/{id}/profile', 'KeluargaController@profile');

    Route::get('/export/export_excel', 'ExportKeluargaController@export_excel');

    Route::get('/export/cetak_pdf', 'ExportKeluargaController@cetak_pdf');
    
    

    Route::get('/user/logout', 'UserController@logout');
});



