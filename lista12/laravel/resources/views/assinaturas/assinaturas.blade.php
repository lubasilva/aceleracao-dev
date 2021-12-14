@include('includes.header')
    <div class="container">
        <h3 class="text-primary text-center"> Assinaturas </h3>
        <table class="table table-bordered mt-5">
            <thead>
                <tr>
                <th scope="col">Qnt de caracteres da assinatura</th>
                <th scope="col">Assinatura padrão</th>
                <th scope="col">N vezes que essa assinatura foi usada</th>
                </tr>
            </thead>
            @foreach ($assinaturas as $assinatura)
                <tbody>
                    <tr>
                        <td>{{$assinatura->qtd_char_assinatura}}</td>
                        <td>{{$assinatura->assinatura_padrao}}</td>
                        <td>{{$assinatura->assinatura_usada}}</td>
                        <td class="text-center"><a href="{{route('assinatura.show', $assinatura->id)}}"><button type="button" class="btn btn-primary">Vizualizar</button></a></td>
                    </tr>
                </tbody>
            @endforeach
        </table>
    </div>

@include('includes.footer')
