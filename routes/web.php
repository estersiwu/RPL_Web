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

//use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/dashboardkoord', 'DashboardkoordController@tampil')->name('koordinator.dashboardkoord');
Route::group(['middleware' => ['auth', 'isKoordinator']], function(){
    Route::get('/jadwalujian', function(){
        return view('jadwal_ujian.');
    });
});

Route::get('/pengajuanketerangankp', 'FormketkpController@form_ketkp');
Route::post('/pengajuanketerangankp/form_ketkp', 'FormketkpController@form_ketkp')->name('pengajuanketerangankp.form_ketkp');
Route::post('/postsuratketkp', 'FormketkpController@postKetkp')->name('inputData');
Route::post('/pengajuanketerangankp/create','FormketkpController@create');
Route::get('/pengajuanprakp', 'FormprakpController@add_prakp');
Route::post('/postprakp', 'FormprakpController@postPrakp')->name('inputData');
//Route::post('/pengajuanprakp/create','FormprakpController@create');
//Route::post('/pengajuanketerangankp/submit', 'FormketkpController@submit');
Route::get('/jadwalujian','JadwalController@jadwal');
Route::post('/jadwalujian/tambahjadwal','JadwalController@tambahjadwal')->name('jadwal_ujian.tmbh_jadwal');
Route::get('/jadwalujian/{id}/editjadwal', 'JadwalController@editjadwal');
Route::post('/jadwalujian/{id}/updatejadwal', 'JadwalController@updatejadwal');
Route::get('/jadwalujian/{id}/deletejadwal','JadwalController@deletejadwal');
Route::post('/pengajuanketerangankp/tambahketkp', 'FormketkpController@store')->name('formketkp.store');
Route::get('/datapengajuanketerangankp','DataketkpController@dataketkp');
