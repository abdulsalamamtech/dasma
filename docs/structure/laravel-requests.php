<?php

// app/Http/Requests/UserRequest.php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $rules = [
            'username' => ['required', 'string', 'min:3', 'max:32'],
            'email' => ['required', 'email', 'min:10', 'max:64'],
            'role' => ['required', 'in:super-admin,admin,customer'],
            'default_address' => ['boolean']
        ];

        if ($this->isMethod('POST')) {
            $rules['email'][] = 'unique:users';
            $rules['password'] = ['required', 'string', 'min:8', 'max:32'];
        }

        if ($this->isMethod('PUT')) {
            $rules['email'][] = 'unique:users,email,' . $this->user->id;
            $rules['password'] = ['nullable', 'string', 'min:8', 'max:32'];
        }

        return $rules;
    }
}

// app/Http/Requests/AddressRequest.php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddressRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'other_name' => ['nullable', 'string', 'max:255'],
            'phone_number' => ['required', 'string', 'max:255'],
            'street' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'state' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255', 'in:Nigeria']
        ];
    }
}

// app/Http/Requests/PromotionRequest.php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PromotionRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'banner_id' => ['required', 'exists:assets,id'],
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'discount' => ['required', 'numeric', 'min:0', 'max:100'],
            'show' => ['required', 'boolean'],
            'start_date' => ['required', 'date'],
            'end_date' => ['required', 'date', 'after:start_date']
        ];
    }
}

// app/Http/Requests/BrandRequest.php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BrandRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'banner_id' => ['required', 'exists:assets,id'],
            'name' => ['required', 'string', 'max:255'],
            'slug' => ['required', 'string', 'max:255', 'unique:brands,slug,' . $this->brand?->id]
        ];
    }
}

// app/Http/Requests/CategoryRequest.php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'slug' => ['required', 'string', 'max:255', 'unique:categories,slug,' . $this->category?->id]
        ];
    }
}

// app/Http/Requests/ProductRequest.php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'banner_id' => ['required', 'exists:assets,id'],
            'name' => ['required', 'string', 'max:255'],
            'slug' => ['required', 'string', 'max:255', 'unique:products,slug,' . $this->product?->id],
            'initial_price' => ['required', 'numeric', 'min:0'],
            'price' => ['required', 'numeric', 'min:0', 'lte:initial_price'],
            'stock' => ['required', 'integer', 'min:0'],
            'sku' => ['required', 'string', 'unique:products,sku,' . $this->product?->id],
            'description' => ['required', 'string'],
            'tags' => ['required', 'array'],
            'tags.*' => ['required', 'string'],
            'category_id' => ['required', 'exists:categories,id'],
            'brand_id' => ['nullable', 'exists:brands,id'],
            'promotion_id' => ['nullable', 'exists:promotions,id'],
            'variations' => ['nullable', 'array', 'max:4'],
            'variations.*.title' => ['required', 'string'],
            'variations.*.color' => ['required', 'string'],
            'variations.*.size' => ['required', 'string'],
            'variations.*.asset_id' => ['required', 'exists:assets,id'],
            'variations.*.sku' => ['required', 'string', 'distinct']
        ];
    }
}

// app/Http/Requests/CartRequest.php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CartRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'product_id' => ['required', 'exists:products,id'],
            'quantity' => ['required', 'integer', 'min:1']
        ];
    }
}

// app/Http/Requests/OrderRequest.php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'address_id' => ['required', 'exists:addresses,id'],
            'coupon' => ['nullable', 'string', 'max:255'],
            'note' => ['nullable', 'string']
        ];
    }
}

// app/Http/Requests/ReviewRequest.php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReviewRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'order_id' => ['required', 'exists:orders,id'],
            'comment' => ['required', 'string'],
            'rating' => ['required', 'integer', 'min:1', 'max:5']
        ];
    }
}

// app/Http/Requests/TransactionRequest.php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TransactionRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'order_id' => ['required', 'exists:orders,id'],
            'amount' => ['required', 'numeric', 'min:0'],
            'status' => ['required', 'in:pending,successful,cancelled,suspended,rejected'],
            'reference' => ['required', 'string', 'unique:transactions,reference,' . $this->transaction?->id],
            'payment_method' => ['required', 'string']
        ];
    }
}

// app/Http/Requests/MessageRequest.php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MessageRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'subject' => ['required', 'string', 'max:255'],
            'message' => ['required', 'string']
        ];
    }
}
