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
            'name' => ['required', 'min:3', 'max:64'],
            'tasks' => ['array', 'required'],
            'tasks.*' => ['required', 'min:3', 'max:128']
        ];
    }

    public function message()
    {
        return [
            'name.required' => 'O nome do objetivo é obrigatório',
            'name.min' => 'O nome do objetivo precisa de pelo menos :min caracteres',
            'name.max' => 'O nome do objetivo pode ter no máximo :max caracteres',
            'tasks.*.required' => 'Cada tarefa precisa ser preenchida',
            'tasks.*.min' => 'Cada tarefa precisa ter pelo menos :min caracteres',
            'tasks.*.max' => 'Cada tarefa pode ter no máximo :max caracteres'
        ];
    }
    
}
