<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreEventRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => ['required', 'string', 'max:255', 'unique:events'],
            'quantity_credits' => ['nullable', 'string', 'max:3'],
            'furni' => ['nullable', 'string', 'max:255'],
            'quantity_coins' => ['nullable', 'string', 'max:3'],
            'badge' => ['nullable', 'string', 'max:5'],
            'date' => ['required', 'date'],
            'time_from' => ['required', 'string'],
            'time_till' => ['required', 'string'],
            'description' => ['required', 'string'],
        ];
    }
}
