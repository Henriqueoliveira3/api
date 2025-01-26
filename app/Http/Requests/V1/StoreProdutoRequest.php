<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class StoreProdutoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nome' => 'required|max:256|string',
            'descricao' => 'required|string',
        ];
    }

    public function messages(): array
    {
        return [
            'nome.required' => 'O campo NOME não pode ser vazio.',
            'nome.max' => 'O campo NOME não pode ter mais de 256 caracteres.',
            'nome.string' => 'O campo NOME deve conter apenas texto.',
            'descricao.required' => 'Por favor, informe o campo DESCRICAO.',
            'descricao.string' => 'O campo DESCRICAO deve conter apenas texto.',
        ];
    }
}
