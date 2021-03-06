<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDetaiRequest extends FormRequest
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
            'ma'=>'required',
            'tendt'=>'required',
            'muctieu'=>'required',
            'ketqua'=>'required',
            'donvith'=>'required',
            'capth'=>'required',
            'trangthai'=>'required',
            'chunhiem'=>'required',
            'loaidt'=>'required',
            'linhvuc'=>'required',
        ];
    }
}
