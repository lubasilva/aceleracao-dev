@include('includes.header')
    <div class="container">
        <h1 class="text-primary text-center">
                Funcionarios
        </h1>

        <ul class="list-group list-group-flush text-center">
            <h3><li class="list-group-item">Titulo: {{$documento->titulo}}</li></h3>
            <h3><li class="list-group-item">Tamanho do documento em MB: {{$documento->tamanho_mb}}</li></h3>
            <h3><li class="list-group-item">Nº de assinaturas do documento: {{$documento->numero_assinaturas}}</li></h3>
            <h3><li class="list-group-item">Assinatura do responsável: {{$documento->assinatura_responsavel}}</li></h3>
            <h3><li class="list-group-item">Quantidade de páginas (1 ou 10): {{$documento->quantidade_paginas}}</li></h3>
        </ul>

        <div class="row d-flex justify-content-center mt-2">
            <a href="{{route('documentos')}}" class="btn btn-primary col-6">Listar Documentos</a>
        </div>

        @if (session('msg'))
            <p>{{session('msg')}}</p>
        @endif

        <form action="{{route('documentos.remover', $documento->id)}}" method="POST">
            @csrf
            <input type="hidden" name="_method" value="DELETE">
            <button type="submit" class="btn btn-primary">Deletar Documento: {{$documento->id}}</button>
        </form>
    </div>

@include('includes.footer')
