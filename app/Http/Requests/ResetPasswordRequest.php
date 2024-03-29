<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResetPasswordRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'phone_number'  => 'bail|required|exists:password_resets,phone_number',
            'token'         => 'bail|required|exists:password_resets,token',
            'password'      => 'bail|required|min:6'
        ];
    }
}
