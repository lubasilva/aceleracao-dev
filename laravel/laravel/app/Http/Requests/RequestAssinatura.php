<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestAssinatura extends FormRequest
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
            'qtd_char_assinatura' => ['required', 'min:1', 'max:200'],
            'assinatura_padrao' => ['required', 'min:10', 'max:200'],
            'assinatura_usada' => ['required', 'min:1', 'max:2'],
        ];
    }

    public function messages()
    {
        return [
            'qtd_char_assinatura.required' => 'Quantidade de caracteres da assinatura e não pode ser vazio',
            'assinatura_padrao.required' => 'Assinatura Padrão não pode ser vazio',
            'assinatura_usada.required' => 'Quantidade de vezes que assinatura foi usada não pode ser vazio',
            'qtd_char_assinatura.min' => 'Quantidade de caracteres da assinatura e não pode ser menor que 1',
            'assinatura_padrao.min' => 'Assinatura Padrão não pode ser menor que 10',
            'assinatura_usada.min' => 'Quantidade de vezes que assinatura foi usada não pode ser menor 1',
            'qtd_char_assinatura.max' => 'Quantidade de caracteres da assinatura e não pode ser maior que 200',
            'assinatura_padrao.max' => 'Assinatura Padrão não pode ser maior que 200',
            'assinatura_usada.max' => 'Quantidade de vezes que assinatura foi usada não pode ser maior que 10',
        ];
    }
}
