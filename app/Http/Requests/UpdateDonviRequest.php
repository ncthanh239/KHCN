<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDonviRequest extends FormRequest
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
           'ten_dv'=>'required',
            'diachi'=>'required',
            'dienthoai'=>'required|numeric|min:9',
            'email'=>'required',
            'linhvuc'=>'required',
        ];
    }
}
