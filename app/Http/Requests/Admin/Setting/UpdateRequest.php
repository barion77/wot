<?php

namespace App\Http\Requests\Admin\Setting;

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
            'lava_secret_key' => 'required',
            'shop_id' => 'required|numeric',
            'telegram_bot_token' => '',
            'chat_id' => 'nullable|numeric',
            'send_logs' => '',
            'telegram_support_link' => 'required',
            'telegram_channel_link' => 'required',
            'zelenka_token' => 'required',
            'free_button_title' => 'nullable',
            'free_button_link' => 'nullable',
            'free_button_status' => 'required|numeric'
        ];
    }
}
