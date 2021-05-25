<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
            'name'            => 'required|max:255|string',
            'address'         => 'required|string',
            'delivery-method' => 'required|string',
            'cc-name'         => 'required|max:255|string',
            'cc-number'       => 'required|min:12|integer',
            'cc-expiration'   => 'required',
            'cc-cvv'          => 'required|min:3|integer',
        ];
    }

    public function attributes()
    {
        return [
            'name'            => 'name',
            'address'         => 'address',
            'delivery-method' => 'delivery-method',
            'cc-name'         => 'card name',
            'cc-number'       => 'card number',
            'cc-expiration'   => 'card expiration',
            'cc-cvv'          => 'card verification value',
        ];
    }

    public function messages()
    {
        return [
            'name.required'            => 'A name is required',
            'address.required'         => 'An address is required',
            'delivery-method.required' => 'A delivery-method is required',
            'cc-name.required'         => 'A card name is required',
            'cc-number.required'       => 'A card number is required',
            'cc-expiration.required'   => 'A card expiration is required',
            'cc-cvv.required'          => 'A card verification value is required',
        ];
    }
}
