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

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();


Route::get('/home','HomeController@index')->name('admin.dashboard');
Route::get('/admin/dashboard','AdminController@dashboard')->name('admin.dashboard');
//route tkj
Route::get('/admin/tkj','AdminController@tkj')->name('admin.tkj.index_tkj');
Route::get('/admin/tkj/create','AdminController@create')->name('admin.tkj.create');
Route::post('/admin/tkj/create','AdminController@store')->name('admin.tkj.store');
Route::get('/admin/tkj/{tkj}/edit','AdminController@edit')->name('admin.tkj.edit');
Route::patch('/admin/tkj/{tkj}/edit','AdminController@update')->name('admin.tkj.update');
Route::delete('/admin/tkj/{tkj}/delete','AdminController@destroy')->name('admin.tkj.destroy');
Route::get('/admin/tkj/index_tkj','AdminController@search')->name('admin.tkj.search');

//route guru
Route::get('/admin/guru/index_guru','GuruController@index')->name('admin.guru.index_guru');
Route::get('/admin/guru/create','GuruController@create')->name('admin.guru.create');
Route::post('/admin/guru/create','GuruController@store')->name('admin.guru.store');
Route::get('/admin/guru/{guru}/edit','GuruController@edit')->name('admin.guru.edit');
Route::patch('/admin/guru/{guru}/edit','GuruController@update')->name('admin.guru.update');
Route::delete('/admin/guru/{guru}/delete','GuruController@destroy')->name('admin.guru.destroy');
Route::get('/admin/guru','GuruController@search')->name('admin.guru.search');

//route mapel
Route::get('/admin/mapel','MapelController@index')->name('admin.mapel.index');
Route::get('/admin/mapel/create','MapelController@create')->name('admin.mapel.create');
Route::post('/admin/mapel/create','MapelController@store')->name('admin.mapel.store');
Route::get('/admin/mapel/{mapel}/edit','MapelController@edit')->name('admin.mapel.edit');
Route::patch('/admin/mapel/{mapel}/edit','MapelController@update')->name('admin.mapel.update');
Route::delete('/admin/mapel/{mapel}/delete','MapelController@destroy')->name('admin.mapel.destroy');
Route::get('/admin/mapel/index','MapelController@search')->name('admin.mapel.search');
//Route::get('/admin/user','MapelController@user')->name('admin.user.user');

//route nilai
Route::get('/admin/nilai','NilaiController@index')->name('admin.nilai.index');
Route::get('/admin/nilai/create','NilaiController@create')->name('admin.nilai.create');
Route::post('/admin/nilai/create','NilaiController@store')->name('admin.nilai.store');
Route::get('/admin/nilai/{nilai}/edit','NilaiController@edit')->name('admin.nilai.edit');
Route::patch('/admin/nilai/{nilai}/edit','NilaiController@update')->name('admin.nilai.update');
Route::delete('/admin/nilai/{nilai}/delete','NilaiController@destroy')->name('admin.nilai.destroy');
Route::get('/admin/nilai/index','NilaiController@search')->name('admin.nilai.search');