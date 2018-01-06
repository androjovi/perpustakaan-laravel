<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peminjam;
use Illuminate\Support\Facades\Input;
use View;
use Redirect;
use App\Http\Requests\PeminjamRequest;
use Session;

class PeminjamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view::make('file_view.peminjam.list_peminjam')
			->with(['query' => Peminjam::where('status_pengembalian','=',0)->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view::make('file_view.peminjam.daftar_peminjam');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PeminjamRequest $request)
    {
        $peminjam = new Peminjam;
		$peminjam->nomor_kartu 			= $request->no_anggota;
		$peminjam->kode_buku 			= $request->kode_buku;
		$peminjam->dari_tanggal 		= $request->dari_tanggal;
		$peminjam->sampai_tanggal 		= $request->sampai_tanggal;
		$peminjam->status_pengembalian 	= 0;
		
			if ($peminjam->save() ){
				return redirect('/peminjam')->with('success','Data berhasil ditambahkan');
			}else{
				return redirect('/peminjam')->with('error','GAGAL');
			}
			
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		
        return view::make('file_view.peminjam.perpanjang')
			->with(['query' => Peminjam::where('kode_buku', '=', $id)->get()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        $buku = Peminjam::where('id','=', Input::get('kde'))->first();
		$buku->sampai_tanggal = Input::get('sampai_tanggal');
			
			if ($buku->save() ){
				return redirect('/list_peminjam')->with('success','Data berhasil diganti');
			}else{
				return redirect('/list_peminjam')->with('error','GATOT');
			}
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
