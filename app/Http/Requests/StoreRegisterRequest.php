<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRegisterRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'password' => ['required', 'same:password_repeat', 'string', 'max:255'],
            'password_repeat' => ['required'],
        ];
    }
}
