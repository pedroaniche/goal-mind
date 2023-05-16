<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryFormRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'min:3', 'max:32'],
            'goals' => ['array'],
            'goals.*' => ['required', 'min:3', 'max:64']
        ];
    }

    public function message()
    {
        return [
            'name.required' => 'O nome da categoria é obrigatório',
            'name.min' => 'O nome da categoria precisa de pelo menos :min caracteres',
            'name.max' => 'O nome da categoria pode ter no máximo :max caracteres',
            'goals.*.required' => 'Cada objetivo precisa ser preenchido',
            'goals.*.min' => 'Cada objetivo precisa ter pelo menos :min caracteres',
            'goals.*.max' => 'Cada objetivo pode ter no máximo :max caracteres'
        ];
    }
}
