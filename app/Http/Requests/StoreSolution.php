<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSolution extends FormRequest
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
            'name' => 'bail|unique:solutions|required',
            'description' => 'required|min:10',
        ];
    }


    public function messages () {
        return [
            'name.required' => 'Ups! parece que esqueceu de digitar o nome da solução',
            'name.unique' => 'O nome da solução deve ser único. O que digitou já existe.',
            'description.required' => 'Ups! escreva uma descrição para a solução',
            'description.min' => 'O campo descrição deve conter pelo menos 10 letras'
        ];
    }

    public function attributes () {
        return [
            'name' => 'Nome',
            'description' => 'Descrição'
        ];
    }
}
