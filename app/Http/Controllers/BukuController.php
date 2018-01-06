<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Buku;
use View;
use Session;
use Redirect;
use App\Http\Requests\BukuRequest;

class BukuController extends Controller
{
	function index()
	{
    	$get = Buku::all();
			
			return view::make('dashboard')
					->with(['query' => $get]);
	}
	
	function TambahBuku()
	{
		return view::make('file_view.buku.tambah_buku');
	}
	 
	function insert(BukuRequest $request)
	{
		$buku = new Buku;
		$buku->kode_buku 		= $request->kode_buku;
		$buku->judul_buku 		= $request->judul_buku;
		$buku->kategori_buku 	= $request->kategori_buku;
		$buku->pengarang_buku 	= $request->pengarang_buku;
		$buku->penerbit_buku 	= $request->penerbit_buku;
		$buku->jumlah_halaman 	= $request->jumlah_halaman;
		
			if ($buku->save() ){
				Session::flash('success','Data berhasil dimasukkan');
				return redirect('/');
			}else{
				Session::flash('error','Galat');
				return redirect('/tambah_buku');
			}
		
		
	}
	
	function delete($id){
		$buku = Buku::where('id', '=', $id);
			if ($buku->delete() ){
				Session::flash('success','Data berhasil dihapus');
				return redirect('/');
			}else{
				Session::flash('error','Galat');
				return redirect('/');
			}
	}
	
	function getbuku()
	{
		$f = Input::get('kode_buku');
		
			$r = Buku::where('kode_buku', '=', $f);
			
				 if ($r->count() == 1){
					 foreach ($r->get() as $k){
						 echo "Judul buku : <b>".$k->judul_buku;
					 }
				 }else{
					 echo "<i>Kode tidak terdaftar pada database";
				 }
	}
	
	function edit(BukuRequest $request){
		
		$buku = Buku::where('id','=',Input::get('id_buku'))->first();
		$buku->judul_buku 		= $request->judul_buku;
		$buku->kategori_buku 	= $request->kategori_buku;
		$buku->pengarang_buku 	= $request->pengarang_buku;
		$buku->penerbit_buku 	= $request->penerbit_buku;
		$buku->jumlah_halaman 	= $request->jumlah_halaman;
		
			if ($buku->save() ) {
				return redirect('/')->with('success','Data berhasil di update');
			}else{
				return redirect('/')->with('error','GAGAL');
			}
		
		
	}
}
