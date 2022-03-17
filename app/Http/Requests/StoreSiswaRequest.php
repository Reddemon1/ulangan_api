<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSiswaRequest extends FormRequest
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
            'nis'=>['required'],
            'kelas'=>['required'],
            'tanggal_mulai_bergejala'=>['required'],
            'hasil_antigen'=>['required'],
            'hasil_pcr'=>['required'],
            'gejala'=>['required']
        ];
    }
}
