<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class mon_request extends FormRequest
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
            'ma_nganh' => 'required',
            'ten_mon' => 'required'
        ];
    }
    public function messages()
    {
        return[
            'required' => ':attribute bắt buộc phải điền',
            
        ];
    }
    public function attributes()

    {
        return[
            'ma_nganh' => '*Tên ngành',
            'ten_mon' => '*Môn'
        ];
    }
}
