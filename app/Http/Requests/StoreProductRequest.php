<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'category_id' => ['required', 'integer', 'exists:categories,id'],
            'brand_id' => ['nullable', 'integer', 'exists:brands,id'],
            'promotion_id' => ['nullable', 'integer', 'exists:promotions,id'],
            'banner_id' => ['nullable', 'integer', 'exists:assets,id'],
            'name' => ['required','string','max:255'],
            'slug' => ['required','string','max:255','unique:products,slug'],
            'description' => ['nullable','string'],
            'price' => ['required','numeric','min:0'],
            'initial_price' => ['required','numeric','min:0'],
            'stock' => ['required','integer','min:0'],
            'tags' => ['nullable','array'],
            'views' => ['nullable','integer','min:0'],
            'sku' => ['required','string','unique:products,sku'],
            'colors' => ['nullable','array'],
            'sizes' => ['nullable','array'],
            'tags.*' => ['required','string'],
        ];
    }
}
