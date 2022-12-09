<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePasswordRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'current_password' => ['required'],
            'new_password' => ['required', 'same:new_password_repeat'],
            'new_password_repeat' => ['required'],
        ];
    }
}
