@include('includes.header');

<div class="container">
    @if($errors->any())
        <div>
            @foreach ($errors->all() as $error)
                {{$error}}
            @endforeach
        </div>
    @endif
    <form action="{{route('documentos.inserir')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="titulo" class="form-label">Titulo do Documento</label>
            <input type="text" class="form-control" name="titulo" value="{{old('titulo')}}">
        </div>

        <div class="row aling-items-center">
            <div class="col mb-3">
                <label for="tamanho_mb" class="form-label">Tamanho em MB</label>
                <input type="number" class="form-control" name="tamanho_mb" value="{{old('tamanho_mb')}}">
            </div>

            <div class="col mb-3">
                <label class="form-label" for="numero_assinaturas">Numero de Assinaturas</label>
                <input type="number" class="form-control" name="numero_assinaturas" value="{{old('numero_assinaturas')}}">
            </div>
        </div>

        <div class="row aling-items-center">
            <div class="col mb-3">
                <label for="assinatura_responsavel" class="form-label">Assinatura Responsavel</label>
                <input type="text" class="form-control" name="assinatura_responsavel" value="{{old('assinatura_responsavel')}}">
            </div>

            <div class="col mb-3">
                <label for="quantidade_paginas" class="form-label">Quantidade de Pagina</label>
                <input type="number" class="form-control" name="quantidade_paginas" value="{{old('quantidade_paginas')}}">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar</button>

    </form>
</div>

@include('includes.footer');
