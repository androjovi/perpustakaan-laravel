<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\KartuPerpus;
use App\Siswa;

class KartuController extends Controller
{
    function getkartu()
	{
		$get = Input::get('kartu');
		
		$cek = KartuPerpus::where('nomor_kartu', '=', $get);
		
			
		if ($cek->count() == 1){
			foreach ($cek->get() as $k):
				$get_s = Siswa::where('nis', '=', $k->nis)->get();
				foreach ($get_s as $l):
					return "Terdaftar, dengan nama : <b>".$l->nama;
				endforeach;
			endforeach;
		}else{
			return "<b>Tidak terdaftar";
		}
	}
}
