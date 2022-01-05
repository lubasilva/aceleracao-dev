<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestDocumentos extends FormRequest
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
            'titulo' => ['required', 'min:10', 'max:200'],
            'tamanho_mb' => ['required', 'min:1', 'max:3'],
            'numero_assinaturas' => ['required', 'min:1', 'max:2'],
            'assinatura_responsavel' => ['required', 'min:10', 'max:200'],
            'quantidade_paginas' => ['required', 'min:1', 'max:2']
        ];
    }

    public function messages()
    {
        return [
            'titulo.required' => 'O Campo titulo não pode ser vazio',
            'tamanho_mb.required' => 'O Campo tamanho em mb não pode ser vazio',
            'numero_assinaturas.required' => 'O Campo numero de assinaturas não pode ser vazio',
            'assinatura_responsavel.required' => 'O Campo assinatura do responsavel não pode ser vazio',
            'quantidade_paginas.required' => 'O Campo quanto de paginas não pode ser vazio',
            'titulo.min' => 'O Campo titulo não pode conter menos de 10 caracteres',
            'tamanho_mb.min' => 'O Campo Tamanho em MB pode não conter menos de 1 caracteres',
            'numero_assinaturas.min' => 'O Campo numero de assinaturas não pode conter menos de 1 caracteres',
            'assinatura_responsavel.min' => 'O Campo assinatura do responsavel não pode conter menos de 10 caracteres',
            'quantidade_paginas.min' => 'O Campo titulo não conter menos de 1 caracteres',
            'titulo.max' => 'O Campo titulo não pode conter mais de 200 caracteres',
            'tamanho_mb.max' => 'O Campo Tamanho em MB pode não conter mais de 2 caracteres',
            'numero_assinaturas.max' => 'O Campo numero de assinaturas não pode conter mais de 2 caracteres',
            'assinatura_responsavel.max' => 'O Campo assinatura do responsavel não pode conter mais de 200 caracteres',
            'quantidade_paginas.max' => 'O Campo titulo não conter mais de 2 caracteres',
        ];
    }
}
