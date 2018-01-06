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
use View as vw; //kampret sumpah

Route::resource('/','BukuController');
Route::resource('/siswa','SiswaController');
Route::resource('/list_peminjam','PeminjamController');

Route::get('/peminjam','PeminjamController@create');
Route::get('/tambah_buku','BukuController@TambahBuku');
Route::get('/hapus_buku/{id}','BukuController@delete');
Route::get('/daftar','SiswaController@pendaftaran');
Route::get('/perpanjang/{id}','PeminjamController@edit');

Route::post('/proses_perpanjang','PeminjamController@update');
Route::post('/get_buku','BukuController@getbuku');
Route::post('/get_kartu','KartuController@getkartu');
Route::post('/get_siswa','SiswaController@getsiswa');
Route::post('/proses_tambah','BukuController@insert');
Route::post('/proses_daftar','SiswaController@simpan');
Route::post('/tambah_peminjam','PeminjamController@store');
Route::post('/proses_editbuku','BukuController@edit');

Route::get('/dikembalikan/{id}', function($id){
	// Mager amat 
	
	if (DB::table('peminjam')
			->where('kode_buku',$id)
			->update(['status_pengembalian' => 1])
	   ){
			return redirect('/list_peminjam')->with('success','Berhasil dikemablikan');
		}else{
			return redirec('/list_peminjam')->with('error','GAGAL');
		}
});

Route::get('/edit_buku/{id}', function($id){
	$r = DB::table('buku')
			 ->where('id','=',$id)
			 ->get();
	return vw::make('file_view.buku.edit')->with(['query' => $r]);
});
