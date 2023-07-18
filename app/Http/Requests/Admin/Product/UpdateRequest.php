<?php

namespace App\Http\Requests\Admin\Product;

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
            'title' => 'nullable',
            'description' => 'nullable',
            'instruction' => 'nullable',
            'price' => 'nullable:numeric',
            'images' => 'nullable',
            'category_id' => 'nullable:integer'
        ];
    }
}
