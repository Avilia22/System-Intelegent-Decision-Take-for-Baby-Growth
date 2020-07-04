<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});
Route::get('/login', function () {
    return view('login');
});
Auth::routes();
Route::get('/dashboard', 'HomeController@index')->name('home');

Route::get('/dashboard', 'dashboardController@dashboard');

Route::get('/data/balita', 'DataBalitaController@index');
Route::get('/data/balita/cari','DataBalitaController@cari');
Route::get('/form/form_balita','DataBalitaController@tambah');
Route::post('/data/balita/store','DataBalitaController@store');
Route::get('/form/edit_balita/{id}','DataBalitaController@edit');
Route::post('/data/balita/update','DataBalitaController@update');
Route::get('/data/balita/hapus_balita/{id}','DataBalitaController@hapus');

Route::get('/data/pemeriksaan', 'DataPemeriksaanControllerr@index');
Route::get('/data/pemeriksaan/cari','DataPemeriksaanControllerr@cari');
Route::get('/form/form_pemeriksaan','DataPemeriksaanControllerr@tambah');
Route::post('/data/pemeriksaan/store','DataPemeriksaanControllerr@store');
Route::get('/form/edit_pemeriksaan/{id}','DataPemeriksaanControllerr@edit');
Route::post('/data/pemeriksaan/update','DataPemeriksaanControllerr@update');
Route::get('/data/pemeriksaan/hapus_pemeriksaan/{id}','DataPemeriksaanControllerr@hapus');

Route::get('/data/pemeriksaan_detail', 'DataPemeriksaanDetailControllerr@index');
Route::get('/form/form_pemeriksaandetail','DataPemeriksaanDetailControllerr@tambah');
Route::post('/data/pemeriksaan_detail/store','DataPemeriksaanDetailControllerr@store');
Route::get('/form/edit_pemeriksaandetail/{id}','DataPemeriksaanDetailControllerr@edit');
Route::post('/data/pemeriksaan_detail/update','DataPemeriksaanDetailControllerr@update');
Route::get('/data/pemeriksaan_detail/hapus_pemeriksaandetail/{id}','DataPemeriksaanDetailControllerr@hapus');


Route::get('/data/kms', 'DataKmsControllerr@index');
Route::get('/data/kms/cari','DataKmsControllerr@cari');
Route::get('/form/form_kms','DataKmsControllerr@tambah');
Route::post('/data/kms/store','DataKmsControllerr@store');
Route::get('/form/edit_kms/{id}','DataKmsControllerr@edit');
Route::post('/data/kms/update','DataKmsControllerr@update');
Route::get('/data/kms/hapus_kms/{id}','DataKmsControllerr@hapus');


Route::get('/data/status', 'StatusGiziController@index');
Route::get('/form/form_status','StatusGiziController@tambah');
Route::post('/data/status/store','StatusGiziController@store');
Route::get('/form/edit_status/{id}','StatusGiziController@edit');
Route::post('/data/status/update','StatusGiziController@update');
Route::get('/data/status/hapus_status/{id}','StatusGiziController@hapus');

Route::get('/data/dss_variabel', 'DSSVariabelController@index');
Route::get('/form/form_dss_variabel','DSSVariabelController@tambah');
Route::post('/data/dss_variabel/store','DSSVariabelController@store');
Route::get('/form/edit_dss_variabel/{id}','DSSVariabelController@edit');
Route::post('/data/dss_variabel/update','DSSVariabelController@update');
Route::get('/data/dss_variabel/hapus_dss_variabel/{id}','DSSVariabelController@hapus');

Route::get('/data/dss_hasil', 'DSSHasilController@index');
Route::get('/form/form_dss_hasil','DSSHasilController@tambah');
Route::post('/data/dss_hasil/store','DSSHasilController@store');
Route::get('/form/edit_dss_hasil/{id}','DSSHasilController@edit');
Route::post('/data/dss_hasil/update','DSSHasilController@update');
Route::get('/data/dss_hasil/hapus_dss_hasil/{id}','DSSHasilController@hapus');

Route::get('/data/dss_keanggotaan', 'DSSKeanggotaanController@index');
Route::get('/form/form_dss_keanggotaan','DSSKeanggotaanController@tambah');
Route::post('/data/dss_keanggotaan/store','DSSKeanggotaanController@store');
Route::get('/form/edit_dss_keanggotaan/{id}','DSSKeanggotaanController@edit');
Route::post('/data/dss_keanggotaan/update','DSSKeanggotaanController@update');
Route::get('/data/dss_keanggotaan/hapus_dss_keanggotaan/{id}','DSSKeanggotaanController@hapus');



Route::get('/card/makanan', 'makananController@lihat'); 
Route::get('/card/brokoli', 'makananController@brokoli');
Route::get('/card/almond', 'makananController@almond');
Route::get('/card/bayam', 'makananController@bayam');
Route::get('/card/berasmerah', 'makananController@berasmerah');
Route::get('/card/ikan', 'makananController@ikan');
Route::get('/card/jagung', 'makananController@jagung');
Route::get('/card/kentang', 'makananController@kentang');
Route::get('/card/pisang', 'makananController@pisang');
Route::get('/card/tomat', 'makananController@tomat');
Route::get('/card/udang', 'makananController@udang');
Route::get('/card/wortel', 'makananController@wortel');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
