@include('includes.header');

<div class="container">
    @if($errors->any())
        <div>
            @foreach ($errors->all() as $error)
                {{$error}}
            @endforeach
        </div>
    @endif

    <form action="{{route('assinatura.inserir')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="qtd_char_assinatura" class="form-label">Quantidade de caracteres da assinatura</label>
            <input type="number" class="form-control" name="qtd_char_assinatura" value="{{old('qtd_char_assinatura')}}">
        </div>

        <div class="mb-3">
            <label for="assinatura_padrao" class="form-label">Assinatura Padrão</label>
            <input type="text" class="form-control" name="assinatura_padrao" value="{{old('assinatura_padrao')}}">
        </div>

        <div class="mb-3">
            <label class="form-label" for="assinatura_usada">Assinatura usada</label>
            <input type="number" class="form-control" name="assinatura_usada" value="{{old('assinatura_usada')}}">
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar</button>

    </form>
</div>

@include('includes.footer');
