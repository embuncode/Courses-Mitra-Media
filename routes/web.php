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

Route::get('/', 'UserController@index');

	Route::get('/login','AuthController@login')->name('login');
	Route::post('/loginpost', 'AuthController@loginpost');
	Route::get('/logout','AuthController@logout');

Route::group(['middleware' => 'auth'], function () {

	// Home
	Route::get('/home', 'HomeController@index');

	// Siswa
	Route::get('/siswa', 'SiswaController@index');
	Route::get('/siswa/apiSiswa', 'SiswaController@apiSiswa');
	Route::get('/siswa/export-excel','SiswaController@export');
	Route::get('/siswa/export-pdf','SiswaController@pdf');
	Route::post('/siswa', 'SiswaController@store');
	Route::get('/siswa/{siswa}/edit', 'SiswaController@edit');
	Route::get('/siswa/detail/{id}', 'SiswaController@show');
	Route::PATCH('/siswa/{siswa}', 'SiswaController@update');
	Route::get('/siswa/{siswa}', 'SiswaController@show');
	Route::delete('/siswa/{siswa}', 'SiswaController@destroy');

	// Pengajar
	Route::get('/pengajar', 'PengajarController@index');
	Route::get('/pengajar/apiPengajar', 'PengajarController@apiPengajar');
	Route::post('/pengajar', 'PengajarController@store');
	Route::get('/pengajar/{pengajar}/edit', 'PengajarController@edit');
	Route::get('/pengajar/detail/{id}', 'PengajarController@show');
	Route::PATCH('/pengajar/{pengajar}', 'PengajarController@update');
	Route::get('/pengajar/{pengajar}', 'PengajarController@show');
	Route::delete('/pengajar/{pengajar}', 'PengajarController@destroy');
	
	// Alumni
	Route::get('/alumni', 'AlumniController@index');
	Route::get('/alumni/apiAlumni', 'AlumniController@apiAlumni');
	Route::post('/alumni', 'AlumniController@store');
	Route::get('/alumni/{alumni}/edit', 'AlumniController@edit');
	Route::get('/alumni/detail/{id}', 'AlumniController@show');
	Route::PATCH('/alumni/{alumni}', 'AlumniController@update');
	Route::get('/alumni/{alumni}', 'AlumniController@show');
	Route::delete('/alumni/{alumni}', 'AlumniController@destroy');
	
	// Kegiatan
	Route::get('/kegiatan','KegiatanController@index');
	Route::get('/kegiatan/apiKegiatan', 'KegiatanController@apiKegiatan');
	Route::post('/kegiatan', 'KegiatanController@store');
	Route::get('/kegiatan/{kegiatan}/edit', 'KegiatanController@edit');
	Route::PATCH('/kegiatan/{kegiatan}', 'KegiatanController@update');
	Route::get('/kegiatan/{kegiatan}', 'KegiatanController@show');
	Route::delete('/kegiatan/{kegiatan}', 'KegiatanController@destroy');
	
	// Berita
	Route::get('/berita', 'BeritaController@index');
	Route::get('/berita/apiBerita', 'BeritaController@apiBerita');
	Route::get('/add-berita', 'BeritaController@create');
	Route::post('/store', 'BeritaController@store');
	Route::get('/berita/show/{id}', 'BeritaController@show');
	Route::get('/berita/edit/{id}', 'BeritaController@edit');
	Route::post('/berita/update/{id}', 'BeritaController@update');
	Route::get('/berita/destroy/{id}', 'BeritaController@destroy');
	
	// Kategori
	Route::get('/kategori', 'KategoriController@index');
	Route::get('/kategori/apiKategori', 'KategoriController@apiKategori');
	Route::post('/kategori', 'KategoriController@store');
	Route::get('/kategori/{kategori}/edit', 'KategoriController@edit');
	Route::PATCH('/kategori/{kategori}', 'KategoriController@update');
	Route::delete('/kategori/{kategori}', 'KategoriController@destroy');
	
	// pesan
	Route::get('/pesan', 'PesanController@notif');
	Route::get('/pesan/apiPesan', 'PesanController@apiPesan');

	Route::get('/pesan/show/{id}', 'PesanController@show');
	Route::get('/pesan/balas/{id}', 'PesanController@balas');
	Route::get('/pesan/delete/{id}', 'PesanController@destroy');
	Route::post('/pesan/kirim-email', 'PesanController@kirimmail');

	// Kursus
	Route::get('/paket1', 'Paket1Controller@index');
	Route::get('/paket1/apiPaket1', 'Paket1Controller@apiPaket1');
	Route::post('/paket1', 'Paket1Controller@store');
	Route::get('/paket1/{paket1}/edit', 'Paket1Controller@edit');
	Route::PATCH('/paket1/{paket1}', 'Paket1Controller@update');
	Route::delete('/paket1/{paket1}', 'Paket1Controller@destroy');

	Route::get('/paket_kursus', 'PaketKursusController@index');
	Route::get('/paket_kursus/apiPaketKursus', 'PaketKursusController@apiPaketKursus');
	Route::post('/paket_kursus', 'PaketKursusController@store');
	Route::get('/paket_kursus/{paket_kursus}/edit', 'PaketKursusController@edit');
	Route::get('/paket_kursus/{paket_kursus}/detail', 'PaketKursusController@detail');
	Route::PATCH('/paket_kursus/{paket_kursus}', 'PaketKursusController@update');
	Route::get('/paket_kursus/detail/{id}', 'PaketKursusController@show');
	Route::delete('/paket_kursus/{paket_kursus}', 'PaketKursusController@destroy');

	Route::get('/paket2', 'Paket2Controller@index');
	Route::get('/paket2/apiPaket2', 'Paket2Controller@apiPaket2');
	Route::post('/paket2', 'Paket2Controller@store');
	Route::get('/paket2/{paket2}/edit', 'Paket2Controller@edit');
	Route::PATCH('/paket2/{paket2}', 'Paket2Controller@update');
	Route::delete('/paket2/{paket2}', 'Paket2Controller@destroy');

	Route::get('/paket3', 'Paket3Controller@index');
	Route::get('/paket3/apiPaket3', 'Paket3Controller@apiPaket3');
	Route::post('/paket3', 'Paket3Controller@store');
	Route::get('/paket3/{paket3}/edit', 'Paket3Controller@edit');
	Route::PATCH('/paket3/{paket3}', 'Paket3Controller@update');
	Route::delete('/paket3/{paket3}', 'Paket3Controller@destroy');

	Route::get('/paket4', 'Paket4Controller@index');
	Route::get('/paket4/apiPaket4', 'Paket4Controller@apiPaket4');
	Route::post('/paket4', 'Paket4Controller@store');
	Route::get('/paket4/{paket4}/edit', 'Paket4Controller@edit');
	Route::PATCH('/paket4/{paket4}', 'Paket4Controller@update');
	Route::delete('/paket4/{paket4}', 'Paket4Controller@destroy');

});

// Frontend User
Route::get('/profil', 'UserController@profile');
Route::get('/user/contact', 'PesanController@store');
Route::get('/alumni', 'UserController@alumni');
Route::get('/pengajar', 'UserController@pengajar');
Route::get('/kontak/detail/{id}', 'UserController@detail');

Route::get('/berita', 'UserController@berita');
Route::get('/user/cari', 'UserController@cari');
Route::get('/user/blog-single/{id}', 'BlogController@index');
Route::post('/user/komentar', 'BlogController@komentar');

Route::get('/kegiatan', 'UserController@kegiatan');
Route::get('/siswa', 'UserController@siswa');
Route::get('/paket-kursus', 'UserController@paketkursus');

Route::post('/pesan/store', 'PesanController@store');

Route::get('/kontak', 'UserController@kontak');
Route::get('/kontak/kirim', 'UserController@store');