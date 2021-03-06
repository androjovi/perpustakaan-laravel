<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BukuRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'judul_buku' 	 => 'required',
			'kategori_buku'	 	 => 'required',
			'pengarang_buku'  	 => 'required',
			'penerbit_buku'   	 => 'required',
			'jumlah_halaman' => 'required',
			'kode_buku'	     => 'required'
        ];
    }
}
