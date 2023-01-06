<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name' => ['required', 'max:255', 'min:4', 'string'],
            'type' => ['required', 'max:255'],
            'description' => ['required', 'min:4', 'string'],
            'price' => ['required', 'integer'],
            'quantity' => ['required', 'integer']
        ];
    }
}
