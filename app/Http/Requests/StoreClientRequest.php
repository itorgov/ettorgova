<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class StoreClientRequest extends Request
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
            'name' => 'required|max:255',
            'phone' => 'required|max:18|min:18',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Необходимо ввести ваше имя.',
            'phone.required' => 'Необходимо ввести ваш номер телефона.',
            'phone.max' => 'Необходимо ввести ваш номер телефона в формате +7 (ХХХ) ХХХ-ХХ-ХХ.',
            'phone.min' => 'Необходимо ввести ваш номер телефона в формате +7 (ХХХ) ХХХ-ХХ-ХХ.',
        ];
    }
}
