<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTransactionRequest extends FormRequest
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
            'user_id' => 'required|exists:users,id',
            'order_id' => 'required|exists:orders,id',
            'amount' => 'required|numeric|between:0,999999999.99',
            'status' => 'required|in:pending,processing,completed,cancelled',
            'reference' => 'required|string|max:255',
            'payment_method' => 'required|in:paypal,stripe',
            // 'data' => 'required|array', // add response data from payment serverW
        ];
    }
}
