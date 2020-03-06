<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HardWareRequest extends FormRequest
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
            'name' => 'required',
            'subcategory_id' => 'required',
            'quantity' => 'required',
        ];
    }

    public function messages(){
        return [
            'subcategory_id.required' => 'A Subcategory  is required',
            'name.required'  => 'A HardWareName is required',
            'quantity' => 'Quantity is required',
        ];
    }
}
