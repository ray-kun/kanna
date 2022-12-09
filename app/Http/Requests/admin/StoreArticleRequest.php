<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreArticleRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => ['required', 'string', 'max:255', 'unique:articles'],
            'short_description' => ['required', 'string', 'max:255'],
            'category' => ['required', 'integer'],
            'body' => ['required', 'string'],
        ];
    }
}
