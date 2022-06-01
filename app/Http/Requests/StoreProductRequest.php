<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'name'        => ['required', 'unique:products,name', 'string', 'min:5'],
            'category'    => ['required', 'exists:categories,id'],
            'description' => ['required', 'string'],
            'price'       => ['required', 'numeric', 'min:0'],
            'image'       => ['required', 'image', 'max:512']
        ];
    }
}
