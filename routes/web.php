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

// Route::get('/', function () {
//     return view('pengunjung.index');
// });
Route::get('/','LandingPageController@index');
// Route::get('/paket_wisata', function () {
//     return view('pengunjung.paket_wisata');
// });
// Route::get('/rental_mobil', function () {
//     return view('pengunjung.rental_mobil');
// });
Route::get('/dashboard','DashboardController@index');
Route::get('/custom_landing_page', function () {
    return view('admin.custom_landing_page');
});

Route::get('/paket_wisata','PaketWisataController@index');
Route::get('/sewa_homestay','SewaHomeStayController@index');
Route::get('/rental_mobil','RentalMobilController@index');

Route::get('/custom_landing_page','CustomLandingPageController@index');
Route::get('/custom_akun','CustomLandingPageController@akun');
Route::post('/ubah_akun/{id}','CustomLandingPageController@ubah_akun');
Route::post('/edit_lp','CustomLandingPageController@edit_lp');

Route::post('/simpan_gl','CustomLandingPageController@tambah');
Route::get('/edit_gl/{id}','CustomLandingPageController@edit');
Route::post('/edit_gl/{id}','CustomLandingPageController@post');
Route::get('/hapus_gl/{id}','CustomLandingPageController@hapus');

Route::get('/custom_paket_wisata','CustomPaketWisataController@index');
Route::post('/simpan_pw','CustomPaketWisataController@tambah');
Route::get('/edit_pw/{id}','CustomPaketWisataController@edit');
Route::post('/edit_pw/{id}','CustomPaketWisataController@post');
Route::get('/hapus_pw/{id}','CustomPaketWisataController@hapus');

Route::get('/custom_rental_mobil','CustomRentalMobilController@index');
Route::post('/simpan_rm','CustomRentalMobilController@tambah');
Route::get('/edit_rm/{id}','CustomRentalMobilController@edit');
Route::post('/edit_rm/{id}','CustomRentalMobilController@post');
Route::get('/hapus_rm/{id}','CustomRentalMobilController@hapus');

Route::get('/custom_sewa_homestay','CustomSewaHomestayController@index');
Route::post('/simpan_sh','CustomSewaHomestayController@tambah');
Route::get('/edit_sh/{id}','CustomSewaHomestayController@edit');
Route::post('/edit_sh/{id}','CustomSewaHomestayController@post');
Route::get('/hapus_sh/{id}','CustomSewaHomestayController@hapus');

Route::get('facebook','ClickCount@facebook');
Route::get('instagram','ClickCount@instagram');
Route::get('whatsapp','ClickCount@whatsapp');

Auth::routes();

Route::get('/home', 'DashboardController@index')->name('home');

Auth::routes(['register' => false]);

Route::get('/clear-cache', function() {
    Artisan::call('view:clear');
    Artisan::call('config:cache');
    Artisan::call('cache:clear');
    return "200 OK";
});
