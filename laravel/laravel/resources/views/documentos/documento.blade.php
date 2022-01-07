@include('includes.header')
    <div class="container">
        @if (session('error'))
        <p style="color:red">{{session('error')}}</p>
        @endif
        <h3 class="text-primary text-center"> Documentos </h3>
        <table class="table table-bordered mt-5">
            <thead>
                <tr>
                <th scope="col">Titulo</th>
                <th scope="col">Tamanho do documento em MB</th>
                <th scope="col">N de assinaturas do documento</th>
                <th scope="col">Assinatura do responsável</th>
                <th scope="col">Quantidade de páginas (1 ou 10)</th>
                </tr>
            </thead>
            @foreach ($documentos as $documento)
                <tbody>
                    <tr>
                        <td>{{$documento->titulo}}</td>
                        <td>{{$documento->tamanho_mb}}</td>
                        <td>{{$documento->numero_assinaturas}}</td>
                        <td>{{$documento->assinatura_responsavel}}</td>
                        <td>{{$documento->quantidade_paginas}}</td>
                        <td class="text-center"><a href="{{route('showLog', $documento->id)}}"><button type="button" class="btn btn-primary">Vizualizar</button></a></td>
                    </tr>
                </tbody>
            @endforeach
        </table>
    </div>

@include('includes.footer')
