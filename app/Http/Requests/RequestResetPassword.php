<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestResetPassword extends FormRequest
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
            'password'=>'required',
            'password_config'=>'required|same:password'
        ];
    }
    public function messages()
    {
        return [
            'password.required'=>'Trường này không được để trống',
            'password_config.required'=>'Trường này không được để trống',
            'password_config.same'=>'Mật khẩu xác nhận không đúng'
        ];
    }
}
