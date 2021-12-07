<!DOCTYPE html>
<html lang="pt-BR">

<body>
    @foreach ($documentos as $documento)
        <p>Titulo: {{$documento->titulo}} </p><br>
        <p>Tamanho do documento em MB: {{$documento->tamanho_mb}} </p><br>
        <p>Nº de assinaturas do documento: {{$documento->numero_assinaturas}} </p><br>
        <p>Assinatura do responsável: {{$documento->assinatura_responsavel}} </p><br>
        <p>Quantidade de páginas (1 ou 10): {{$documento->quantidade_paginas}} </p><br>
    @endforeach
</body>

</html>
