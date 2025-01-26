<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMarcaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function rules(): array
    {
        $method = $this->method();

        if ($method == 'PUT') {
            return [
                'nome' => 'required|max:256|string',
            ];
        } else {
            return [
                'nome' => 'sometimes|required|max:256|string',
                'descricacao' => 'sometimes|max:256|string'
            ];
        }
    }

    public function messages(): array
    {
        return [
            'nome.required' => 'O campo NOME não pode ser vazio.',
            'nome.max' => 'O campo NOME não pode ter mais de 256 caracteres.',
            'nome.string' => 'O campo NOME deve conter apenas texto.',
            'descricacao.max' => 'O campo DESCRICAO não pode ter mais de 256 caracteres.',
            'descricacao.string' => 'O campo DESCRICAO deve conter apenas texto.',
        ];
    }
}
