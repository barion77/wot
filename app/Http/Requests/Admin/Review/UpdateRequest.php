<?php

namespace App\Http\Requests\Admin\Review;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'username' => 'nullable',
            'telegram' => 'nullable',
            'telegram_hidden' => 'nullable',
            'content' => 'nullable',
            'good' => 'nullable'
        ];
    }
}
