<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePropertyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            // 'name' => 'string|max:55',
            // 'bedrooms' => 'numeric',
            // 'bathrooms' => 'decimal:1',
            // 'cleanrooms' => 'numeric',
            // 'parkings' => 'numeric',
            // 'address' => 'string|max:255',
            // 'price' => 'decimal:2',
            // 'discount' => 'decimal:2',
            // 'sizeLength' => 'numeric',
            // 'sizeWidth' => 'numeric',
            // 'level' => 'numeric',
            // 'floors' => 'numeric',
        ];
    }
}
