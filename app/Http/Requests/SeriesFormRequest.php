<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SeriesFormRequest extends FormRequest
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
            'nome' => ['required', 'min:3']
        ];
    }

    public function messages(): array //Retorna as mensagens de erro
    {
        return [
            'nome.required' => 'Por favor, informe o nome da série.',
            'nome.min' => 'O nome da série deve ter pelo menos :min caracteres.'
        ];
    }
}
