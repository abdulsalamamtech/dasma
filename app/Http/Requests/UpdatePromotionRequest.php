<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePromotionRequest extends FormRequest
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
            'banner' => ['nullable', 'image', 'max:2048'],
            'discount' => ['required', 'between:1,100'],
            'name' => ['required','string','max:255'],
            'description' => ['required','string'],
            'start_date' => ['required','date'],
            'end_date' => ['required','date','after:start_date'],
        ];
    }
}
