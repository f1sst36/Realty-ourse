<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddOrderRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'min:3|max:200',
            'phone' => 'min:8|max:13',
            'area' => 'required|numeric',
            'price' => 'required|numeric',
            'description' => 'required|min:3|max:2000',
        ];
    }
}