<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PeminjamRequest extends FormRequest
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
            'no_anggota'		=> 'required',
			'kode_buku'			=> 'required',
			'dari_tanggal'		=> 'required',
			'sampai_tanggal'	=> 'required',
        ];
    }
}
