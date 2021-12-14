@include('includes.header')

<div class="container my-5">
    <div class="row">
        <h2 class="text-center my-3">Exercicios em Laravel</h2>
    </div>

    <div class="row my-5 justify-content-around">
        <div class="card col-5">
            <div class="card-header">
                <h2>Exercicio 99</h2>
            </div>
            <div class="card-body d-flex align-items-start flex-column">
                <p class="card-text">Usando seu conhecimento em laravel, crie uma estrutura model, view e controller na
                    qual você possa facilmente apresentar o nome e a idade de um usuário ao acessar a
                    rota “perfil”. (/perfil)</p>
                <a href="{{route('perfil')}}" class="btn btn-primary  mt-auto">Vizualizar</a>
            </div>
        </div>

        <div class="card col-5">
            <div class="card-header">
                <h2>Exercicio 100</h2>
            </div>
            <div class="card-body d-flex align-items-start flex-column">
                <p class="card-text">Usando seus conhecimentos de Laravel, crie agora uma estrutura de model para
                    uma classe chamada “Documento”. Em seguida crie um migration para essa classe
                    documento, esse migrate deve ser capaz de ter as seguintes informações no banco:<br>
                    - Titulo do documento<br>
                    - Tamanho do documento em MB<br>
                    - Nº de assinaturas do documento<br>
                    - Assinatura do responsável<br>
                    - Quantidade de páginas (1 ou 10)</p>
                <a href="{{route('documentos')}}" class="btn btn-primary  mt-auto">Vizualizar</a>
            </div>
        </div>
    </div>

    <div class="row my-5 justify-content-around">
        <div class="card col-5">
            <div class="card-header">
                <h2>Exercicio 101</h2>
            </div>
            <div class="card-body d-flex align-items-start flex-column">
                <p class="card-text">Usando seus conhecimentos em laravel, implemente um log para um canal
                    personalizado chamado documentos, que terá como saída o arquivo documentos.log.
                    Insira as informações de monitoramento da sua aplicação, por exemplo dentro de cada
                    método criado até agora crie um log que forneça informações na categoria info
                    informando os eventos que estão acontecendo na sua aplicação, por exemplo na
                    controller de documentos informe quando os documentos forem consultados com
                    sucesso.</p>
                <a href="{{route('documentos')}}" class="btn btn-primary mt-auto">Vizualizar</a>
            </div>
        </div>

        <div class="card col-5">
            <div class="card-header">
                <h2>Exercicio 102</h2>
            </div>
            <div class="card-body d-flex align-items-start flex-column">
                <p class="card-text">Usando seus conhecimentos em laravel na view do exercício 100, implemente um
                    link capaz de redirecionar para uma rota que receberá o ID desse documento. Com o ID desse documento você deve carregar as informações dele de forma individual e as
                    exibirá em uma nova view com o nome de “exibedoc”, sendo assim nessa view você
                    deve ser capaz de exibir as informações individuais desse documento. Lembre-se de
                    criar um link de retorno para a página de listagem dos documentos.</p>
                <a href="{{route('documentos')}}" class="btn btn-primary  mt-auto">Vizualizar</a>
            </div>
        </div>
    </div>

    <div class="row my-5 justify-content-around">
        <div class="card col-5">
            <div class="card-header">
                <h2>Exercicio 103</h2>
            </div>
            <div class="card-body d-flex align-items-start flex-column">
                <p class="card-text">Usando seus conhecimentos de Laravel, crie agora uma estrutura de model para
                    uma classe chamada “Assinatura”. Crie também a sua respectiva controller. Em seguida
                    crie um migration para essa classe assinatura, esse migration deve ser capaz de ter as
                    seguintes informações no banco:<br>
                    - Qnt de caracteres da assinatura<br>
                    - Assinatura padrão<br>
                    - Nº vezes que essa assinatura foi usada</p>
                <a href="{{route('assinatura.index')}}" class="btn btn-primary mt-auto">Vizualizar</a>
            </div>
        </div>
    </div>
</div>
@include('includes.footer')
