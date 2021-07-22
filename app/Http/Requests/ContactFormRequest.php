<?php

namespace App\Http\Requests;

use GuzzleHttp\Psr7\Request;
use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {

        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //fazendo validações para os campos de contato
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ];
    }
    public function messages()
    {

        return [
            'name.required' => 'Campo nome obrigatório!',
            'email.required' => 'Campo email obrigatório!',
            'email.email' => 'Formato de email inválido!',
            'message.required' => 'Campo de mensagem obrigatório!'
        ];
    }
}