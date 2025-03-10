<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTarefaRequest extends FormRequest
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
            'titulo' => 'required|string',
            'descricao' => 'required|string',
            'edificio_id' => 'required|exists:edificios,id',
            'user_id' => 'required|exists:users,id',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */

    public function messages(): array
    {
        return [
            'titulo.required' => 'O título é obrigatório',
            'descricao.required' => 'A descrição é obrigatória',
            'edificio_id.required' => 'O edifício é obrigatório',
            'user_id.required' => 'O utilizador é obrigatório',
        ];
    }
}
