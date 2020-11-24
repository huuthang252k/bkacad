<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class sinh_vien_request extends FormRequest
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
            'ten_sinh_vien' => 'required',
            'email' => 'required|email|unipue:sinh_vien,email',
            'ma_lop' => 'required',
            'dia_chi' => 'required',
            'sdt' => 'required',
            'ngay_sinh' => 'required',
            'gioi_tinh' => 'required',
            'password' => 'required'
        ];
    }
    public function messages()
    {
        return[
            'required' => ':attribute bắt buộc phải điền',
            'email' => ':attribute phải hợp lệ'
        ];
    }
    public function attributes()

    {
        return[
            'ten_sinh_vien' => '*Tên sinh viên',
            'email' => '*Email',
            'ma_lop' => '*Lớp',
            'dia_chi' => '*Địa chỉ',
            'sdt' => '*Sđt',
            'ngay_sinh' => '*Ngày sinh',
            'gioi_tinh' => '*Giới tính',
            'password' => '*Password'
        ];
    }
}
