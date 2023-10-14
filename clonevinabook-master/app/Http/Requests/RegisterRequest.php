<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'fullname' => 'required',
         'email' => 'required|email|unique:users',
         'password' => 'required|confirmed', 
         'date' => 'required',
         'gioitinh' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'fullname.required' => 'bạn chưa nhập tên',
            'email.required' => 'bạn chưa nhập vào email',
            'password.required' => 'bạn chưa nhập vào mật khẩu',
            'password.confirmed' =>"mật khẩu không khớp",
            'date.required' => 'vui lòng chọn ngày sinh',
            'gioitinh.required' => 'vui lòng chọn giới tính',
            'email.unique' => 'email đã được sử dụng',
            
        ];
    }
}