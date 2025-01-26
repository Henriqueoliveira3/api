<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoriaRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'nome' => 'required|max:255|string',
            'descricao' => 'max:255|string'
        ];
    }

    public function messages(): array
    {
        return [
            'nome.required' => 'O campo NOME não pode ser vazio.',
            'nome.max' => 'O campo NOME não pode ter mais de 256 caracteres.',
            'nome.string' => 'O campo NOME deve conter apenas texto.',
            'descricao.max' => 'O campo NOME não pode ter mais de 256 caracteres.',
            'descricao.string' => 'O campo NOME deve conter apenas texto.',
        ];
    }
}
