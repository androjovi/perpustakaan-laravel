<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use View;
use Session;
use App\Http\Requests\SiswaReq;
use Illuminate\Support\Facades\Input;
use App\KartuPerpus;

class SiswaController extends Controller
{
    function index()
	{
		$get = Siswa::all();
		
			return view::make('file_view.siswa.list_siswa')
					->with(['query' => $get]);
	}
	
	function getsiswa(SiswaReq $request){
		$nis = $request->nisk;
		
		$get = Siswa::where('nis', '=', $nis);
		$f = KartuPerpus::where('nis', '=', $nis);	
		if ( $f->count() == 0 ){
				if ($get->count() == 1){
						foreach ($get->get() as $k):
							return "Siswa terdaftar <br><i>Atas nama</i> : <b>".$k->nama;
						endforeach;
				}else{
					return "Tidak terdaftar";
				}
		}else{
			foreach ($f->get() as $k):
				return "Sudah mempunyai kartu anggota dengan nomor : <b>".$k->nomor_kartu;
			endforeach;
		}
		
	}
	
	function pendaftaran()
	{
		return view::make('file_view.siswa.pendaftaran');
	}
	
	function simpan()
	{	
		
		
		$siswa = new KartuPerpus;
		$siswa->nomor_kartu = Input::get('no_kartu');
		$siswa->nis 		= Input::get('nis');
		
		if ($siswa->save() ){
			Session::flash('success','Berhasil menambahkan kartu');
			redirect('/daftar');
		}else{
			echo "Tidak berhasil";
		}
	}
}
