<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class EditArticleRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => ['required', 'string', 'max:255', Rule::unique('articles')->ignore($this->article->id)],
            'short_description' => ['required', 'string', 'max:255'],
            'category' => ['required', 'integer'],
            'body' => ['required', 'string'],
            'status' => ['required']
        ];
    }
}
