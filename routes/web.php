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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'DashboardController@tampil')->name('dashboard');
Route::group(['middleware' => ['auth', 'isKoordinator']], function(){
    Route::get('/jadwalujian', function(){
        return view('jadwal_ujian.jadwal');
    });
});
Route::get('/pengajuanketerangankp', 'FormketkpController@add_ketkp');
Route::post('/postsuratketkp', 'FormketkpController@postKetkp')->name('inputData');
Route::post('/pengajuanketerangankp/create','FormketkpController@create');
Route::get('/pengajuanprakp', 'FormprakpController@add_prakp');
Route::post('/postprakp', 'FormprakpController@postPrakp')->name('inputData');
Route::post('/pengajuanprakp/create','FormprakpController@create');
Route::post('/pengajuanketerangankp/submit', 'FormketkpController@submit');
Route::get('/jadwalujian','JadwalController@jadwal');
Route::get('/jadwalujian/tambahjadwal','JadwalController@tmbh_jadwal')->name('jadwal_ujian.tmbh_jadwal');
