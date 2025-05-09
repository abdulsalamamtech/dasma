<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAddressRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            // 'user_id' => ['required', 'string'],
            'first_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
            // 'other_name' => ['required', 'string'],
            'phone_number' => ['required', 'string'],
            'street' => ['required', 'string'],
            'city' => ['required', 'string'],
            'state' => ['required', 'string'],
            'post_code' => ['nullable', 'string'],
            // 'country' => ['required', 'string'],
            // default_address = yes
            // 'country' => ['required', 'string'],
        ];
    }
}
