<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name'=>'required | string | min:2 | max:50',
            'email'=>'required | email | unique:users',
            'password'=>'required | min:8'
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>'Nome é obrigatório!',
            'name.max'=>'O nome deve ter no máximo 50 caracteres!',
            'name.min'=>'O nome deve ter no mínimo 2 caracteres!',
            'email.required'=>'Email é obrigatório!',
            'email.unique'=>'Email já cadastrado!',
            'email.email'=>'Informe um email válido!',
            'password.min'=>'A senha deve ter no mínimo 8 caracteres!',
            'password.required'=>'Senha é obrigatória!'
        ];
    }
}
