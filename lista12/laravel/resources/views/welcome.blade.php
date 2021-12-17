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

        <div class="card col-5">
            <div class="card-header">
                <h2>Exercicio 104</h2>
            </div>
            <div class="card-body d-flex align-items-start flex-column">
                <p class="card-text">Dado seu conhecimento em Laravel, crie uma nova rota (/documentos/novo) que
                    seja capaz de exibir um formulário para inserir as informações de um documento (Esse
                    documento foi aquele criado no exercício 100 Lista 12, agora você não vai inserir as
                    informações no banco na mão e sim por esse formulário). Lembre-se de inserir um token
                    no seu formulário para detectar a origem da request e use o verbo post para interpretar
                    essa rota. Sempre que inserir com sucesso um novo documento redirecione o usuário
                    para a view de listagem dos documentos, use também no seu redirect a criação de uma
                    sessão flash para enviar a mensagem “Documento criado com sucesso”. Crie também na
                    sua model os campos que serão preenchiveis.</p>
                <a href="{{route('documentos.novo')}}" class="btn btn-primary mt-auto">Vizualizar</a>
            </div>
        </div>
    </div>

    <div class="row my-5 justify-content-around">
        <div class="card col-5">
            <div class="card-header">
                <h2>Exercicio 105</h2>
            </div>
            <div class="card-body d-flex align-items-start flex-column">
                <p class="card-text">Usando seu conhecimento em Laravel, crie uma classe para fazer a validação do
                    seu formulário de inserção de documentos. Lembre-se também de personalizar as
                    mensagens de validação. Substitua na sua controller a Request do Laravel pela sua
                    classe de validações. Faça as seguintes validações nessa classe:<br>
                    - Titulo do documento (Obrigatório, minimo de 10 caracteres, máximo de 200)<br>
                    - Tamanho do documento em MB (Obrigatório, minimo de 1 caracteres, máximo de
                    3)<br>
                    - Nº de assinaturas do documento (Obrigatório, minimo de 1 caracteres, máximo de
                    2)<br>
                    - Assinatura do responsável (Obrigatório, minimo de 10 caracteres, máximo de 200)<br>
                    - Quantidade de páginas (1 ou 10) (Obrigatório, minimo de 1 caracteres, máximo de
                    2)</p>
                <a href="{{route('documentos.novo')}}" class="btn btn-primary mt-auto">Vizualizar</a>
            </div>
        </div>

        <div class="card col-5">
            <div class="card-header">
                <h2>Exercicio 106</h2>
            </div>
            <div class="card-body d-flex align-items-start flex-column">
                <p class="card-text">Dado seu conhecimento em laravel, usando a página de listagem de detalhes do
                    documento, onde você carrega todos os detalhes do documento baseado no seu ID
                    (Exercício. 102 Lista 12). Crie ao fim da listagem de detalhes um botão de delete.
                    Implemente nesse botão um formulário capaz de enviar uma requisição para a rota
                    (documentos/remover/{id}) e remover o documento que está sendo detalhado. Em
                    seguida caso o documento seja removido com sucesso, redirecione para a página de listagem de documentos e envie uma mensagem através de uma sessão flash com um
                    feedback “Documento removido com sucesso”.</p>
                <a href="{{route('documentos')}}" class="btn btn-primary mt-auto">Vizualizar</a>
            </div>
        </div>
    </div>

    <div class="row my-5 justify-content-around">
        <div class="card col-5">
            <div class="card-header">
                <h2>Exercicio 107</h2>
            </div>
            <div class="card-body d-flex align-items-start flex-column">
                <p class="card-text">Crie uma nova rota (/assinaturas/novo) que seja capaz de capaz de exibir um
                    formulário para inserir as informações de uma assinatura (Essa assinatura já foi criada
                    estruturalmente no exercício 103 Lista 12, agora você não mais vai inserir as
                    informações no banco na mão e sim por esse formulário). Lembre-se de inserir um token
                    no seu formulário para detectar a origem da request e use o verbo post para interpretar
                    essa rota. Sempre que inserir com sucesso uma nova assinatura redirecione o usuário
                    para a view de listagem das assinaturas, use também no seu redirect a criação de uma
                    sessão flash para enviar a mensagem “Assinatura criada com sucesso”. Crie também na
                    sua model de Assinaturas os campos que serão preenchíveis.</p>
                <a href="{{route('assinatura.novo')}}" class="btn btn-primary mt-auto">Vizualizar</a>
            </div>
        </div>

        <div class="card col-5">
            <div class="card-header">
                <h2>Exercicio 108</h2>
            </div>
            <div class="card-body d-flex align-items-start flex-column">
                <p class="card-text">Usando seu conhecimento em Laravel, crie uma classe para fazer a validação do
                    seu formulário de inserção de Assinaturas. Lembre-se também de personalizar as
                    mensagens de validação. Substitua na sua controller a Request do Laravel pela sua
                    classe de validações. Faça as seguintes validações nessa classe:<br>
                    - Qnt de caracteres da assinatura (Obrigatório, mínimo de 1 caracteres, máximo de
                    200)<br>
                    - Assinatura padrão (Obrigatório, mínimo de 10 caracteres, máximo de 200)<br>
                    - Nº vezes que essa assinatura foi usada (Obrigatório, mínimo de 1 caracteres,
                    máximo de 2)</p>
                <a href="{{route('assinatura.novo')}}" class="btn btn-primary mt-auto">Vizualizar</a>
            </div>
        </div>
    </div>

    <div class="row my-5 justify-content-around">
        <div class="card col-5">
            <div class="card-header">
                <h2>Exercicio 109</h2>
            </div>
            <div class="card-body d-flex align-items-start flex-column">
                <p class="card-text">Dado seu conhecimento em laravel, usando a página de listagem de detalhes da
                    assinatura, onde você carrega todos os detalhes da assinatura baseado no seu ID
                    (Exercício. 103 Lista 12). Dentro da página de listagem, crie ao fim da listagem de
                    detalhes um botão de delete. Implemente nesse botão um formulário capaz de enviar
                    uma requisição para a rota (assinaturas/remover/{id}) e com isso sua ação deve ser capaz
                    de remover a assinatura que está sendo detalhada. Em seguida caso o assinatura seja
                    removida com sucesso, redirecione para a página de listagem de assinaturas e envie
                    uma mensagem através de uma sessão flash com um feedback “Assinatura removida
                    com sucesso”.</p>
                <a href="{{route('assinatura.index')}}" class="btn btn-primary mt-auto">Vizualizar</a>
            </div>
        </div>

    </div>
</div>
@include('includes.footer')
