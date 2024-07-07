<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateContactoRequest extends FormRequest
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
            'nombre' => 'required',
            'email' => 'required|email',
            'asunto' => 'required',
            'mensaje' => 'required|min:3'
        ];
    }

    public function messages(): array
    {
        return [
            'nombre.required' => 'Ingresa tu nombre',
            'email.required' => 'Ingresa tu email',
            'asunto.required' => 'Ingresa tu asunto',
            'mensaje.required' => 'Ingresa tu mensaje'
        ];
    }
}
