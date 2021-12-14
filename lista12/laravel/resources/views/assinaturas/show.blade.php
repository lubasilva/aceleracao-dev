@include('includes.header')
    <div class="container">
        <h1 class="text-primary text-center">
                Assinatura
        </h1>

        <ul class="list-group list-group-flush text-center">
            <h3><li class="list-group-item">Qnt de caracteres da assinatura: {{$assinatura->qtd_char_assinatura}}</li></h3>
            <h3><li class="list-group-item">Assinatura padrão: {{$assinatura->assinatura_padrao}}</li></h3>
            <h3><li class="list-group-item">N vezes que essa assinatura foi usada: {{$assinatura->assinatura_usada}}</li></h3>
        </ul>

        <div class="row d-flex justify-content-center mt-2">
            <a href="{{route('assinatura.index')}}" class="btn btn-primary col-6">Listar Assinaturas</a>
        </div>
    </div>

@include('includes.footer')
