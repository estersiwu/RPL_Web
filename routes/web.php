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
Route::group(['middleware' => ['auth', 'isKoordinator']], function() {
    Route::get('/dashboard-koord', function () {
        return view('koordinator.dashboard');
    //Route::get('/jadwalujian', function(){
        //return view('jadwal_ujian.');
    });
});

Route::group(['middleware' => ['auth', 'isDosen']], function() {
    Route::get('/dashboard-dosen', function () {
        return view('dosen.dashboard');
    });
});


/*Route::get('/pengajuanketerangankp', 'FormketkpController@form_ketkp');
Route::post('/pengajuanketerangankp/form_ketkp', 'FormketkpController@form_ketkp')->name('pengajuanketerangankp.form_ketkp');
Route::post('/pengajuanketerangankp/tambahketkp', 'FormketkpController@store')->name('formketkp.store');*/

Route::get('/pengajuanketerangankp', 'PengajuanketkpController@pengajuan_ketkp');
Route::post('/pengajuanketerangankp/pengajuan_ketkp', 'PengajuanketkpController@pengajuan_ketkp')->name('pengajuanketerangankp.pengajuan_ketkp');
Route::post('/pengajuanketerangankp/addketkp', 'PengajuanketkpController@store')->name('pengajuanketkp.store');

Route::get('/pengajuanprakp', 'PengajuanprakpController@pengajuan_prakp');
Route::post('/pengajuanprakp/pengajuan_prakp', 'PengajuanprakpController@pengajuan_prakp')->name('pengajuanprakp.pengajuan_prakp');
Route::post('/pengajuanprakp/addprakp', 'PengajuanprakpController@keep')->name('pengajuanprakp.keep');

Route::get('/pengajuankp', 'PengajuankpController@pengajuan_kp');
Route::post('/pengajuankp/pengajuan_kp', 'PengajuankpController@pengajuan_kp')->name('pengajuankp.pengajuan_kp');
Route::post('/pengajuankp/addkp', 'PengajuankpController@hold')->name('pengajuankp.hold');

/*Route::get('/pengajuankp', 'FormkpController@form_kp');
Route::post('/pengajuankp/form_kp', 'FormkpController@form_kp')->name('pengajuankp.form_kp');
Route::post('/pengajuankp/tambahkp', 'FormkpController@store')->name('formkp.store');*/


Route::get('/datapengajuanketerangankp','DataketkpController@dataketkp');
Route::post('/postsuratketkp', 'FormketkpController@postKetkp')->name('inputData');
Route::post('/pengajuanketerangankp/create','FormketkpController@create');

Route::get('/download{file}','DataketkpController@download');
Route::get('/download{file}','DataprakpController@download');
Route::get('/download{file}','DatakpController@download');

//Route::resource('/datapengajuanketerangankp', 'DataketkpController@dataketkp');
Route::get('/datapengajuanketerangankp/{id}/delete','DataketkpController@destroy');

Route::get('/datapengajuan-kp','DatakpController@datakp');
Route::get('/datapengajuan-prakp','DataprakpController@dataprakp');

Route::get('/jadwalujian','JadwalController@jadwal');
Route::post('/jadwalujian/tambahjadwal','JadwalController@tambahjadwal')->name('jadwal_ujian.tmbh_jadwal');
Route::get('/jadwalujian/{id}/editjadwal', 'JadwalController@editjadwal');
Route::post('/jadwalujian/{id}/updatejadwal', 'JadwalController@updatejadwal');
Route::get('/jadwalujian/{id}/deletejadwal','JadwalController@deletejadwal');

Route::get('/daftarbimbingan','DaftarBimbinganController@daftar_bimbingan');

Route::get('/daftar-regis-kp','DaftarregisController@daftarregiskp');

Route::get('/bataskp','BataskpController@bataskp');
Route::post('/bataskp/set-bataskp','BataskpController@setbataskp')->name('bataskp');
Route::get('/bataskp/{id}/edit-bataskp', 'BataskpController@editbataskp');
Route::post('/bataskp/{id}/update-bataskp', 'BataskpController@updatebataskp');
Route::get('/bataskp/{id}/delete-bataskp','BataskpController@deletebataskp');

Route::get('/lihatjadwal','LihatjadwalController@jadwalujian');


/*Route::get('/pengajuanprakp', 'FormprakpController@form_prakp');
Route::post('/pengajuanprakp/form_prakp', 'FormprakpController@form_prakp')->name('pengajuanprakp.form_prakp');
Route::post('/pengajuanprakp/tambahprakp', 'FormprakpController@store')->name('formprakp.store');
Route::post('/postprakp', 'FormprakpController@postPrakp')->name('inputData');
//Route::post('/pengajuanprakp/create','FormprakpController@create');
//Route::post('/pengajuanketerangankp/submit', 'FormketkpController@submit');*/


