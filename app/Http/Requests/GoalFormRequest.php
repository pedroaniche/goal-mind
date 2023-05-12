<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GoalFormRequest extends FormRequest
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
            'name' => ['required', 'min:2']
        ];
    }

    public function message()
    {
        return [
            'name.required' => 'O campo nome é obrigatório',
            'name.min' => 'O campo nome precisa de pelo menos :min caracteres'
        ];
    }
    
}
