<?php

namespace App\Http\Requests\Admin\Promotion;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name' => 'required',
            'code' => 'required|min:5',
            'discount_amount' => 'required|numeric',
            'max_uses' => 'required|integer',
            'max_uses_user' => 'required|integer',
            'starts_at' => 'required|date',
            'expires_at' => 'required|date',
        ];
    }
}
