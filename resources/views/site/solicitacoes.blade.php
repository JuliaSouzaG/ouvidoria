
{{-- Conteúdo que vai ser herdado e servir como modelo --}}
@extends('site.base_site')

{{-- Altera o título da página (Que fica na aba do navegador) --}}
@section('title', 'Solicitações')

{{-- Conteúdo da página em si --}}
@section('content')
<main>
    <div class="text-center mt-5 title-color mb-4">
        <h3>Registrar Solicitação</h3>
        <hr class="mx-auto w-50">

    </div>
    <section class="mx-1">
        <div class="container col-12 col-md-8 col-lg-6 bg-dark-blue py-4 px-3 rounded-3 mb-5">
            <div class="d-flex justify-content-between mb-3">
                <a href="{{ route('reclamacoes') }}" class="btn btn-padrao col-2 btn-cel">Reclamação</a>
                <a href="{{ route('denuncias') }}" class="btn btn-padrao col-2 btn-cel">Denúncia</a>
                <a href="{{ route('sugestoes') }}" class="btn btn-padrao col-2 btn-cel">Sugestão</a>
                <button type="button" class="btn btn-padrao col-2 btn-cel" disabled>Solicitação</button>
                <a href="{{ route('elogios') }}" class="btn btn-padrao col-2 btn-cel">Elogio</a>
            </div>
            <div class="container">
                <p class="text-light fw-medium mb-4 descricao descricao-cel">Atenção! Sua manifestação será
                    encaminhada para a
                    Ouvidoria Geral do Sistema de Segurança Pública do Amazonas para análise e encaminhamentos. Use
                    o
                    campo abaixo para descrever suas solicitações de providências ao Sistema de Segurança Pública do
                    Amazonas e seus órgãos. Marque "manifestação anônima" se não desejar ser identificado. Para
                    compartilhar essa solicitação com outro órgão, inclua essa informação no final do texto da
                    manifestação.
                </p>
                <div class="form-color p-3 rounded-3 mx-auto">
                    <form action="">
                        <div class="form-text float-end" id="">Data: XX/XX/XXXX</div>
                        <div class="form-text float-end me-2" id="">N° do Protocolo:
                            XXXXXXXXX</div> <br> <br>

                        <h5 class="mb-3"><i class="bi bi-person-fill"></i> Identificação</h5>

                        <div class="row mb-3">
                            <div class="col-12 col-lg-6 col-xl-4 mb-3 ">
                                <label for="nome" class="form-label">Nome</label>
                                <input type="text" class="form-control" id="nome" aria-describedby="emailHelp"
                                    placeholder="Digite seu nome completo" required>
                            </div>
                            <div class="col-12 col-lg-6 col-xl-4 mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                                    placeholder="Digite seu endereço de e-mail" required>
                            </div>
                            <div class="col-12 col-lg-6 col-xl-4 mb-4">
                                <label for="nome" class="form-label">Telefone</label>
                                <input type="text" class="form-control" id="telefone" aria-describedby="emailHelp"
                                    placeholder="(00) 0000-0000">
                            </div>
                        </div>
                        <h5 class="mb-4"><i class="bi bi-file-earmark-text-fill"></i> Descrição da Solicitação
                        </h5>
                        <div class="row mb-3">
                            <label for="assunto" class="form-label">Órgão responsável</label>
                            <div class="col-12 col-xl-6 mb-2">
                                <select class="form-select" aria-label="Default select example" id="select-orgao">
                                    <option selected>Selecione o órgão responsável</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-12 col-xl-6 mb-3">
                                <div class="form-check align-bottom">
                                    <input class="form-check-input" type="checkbox" value="check-orgao"
                                        id="check-orgao">
                                    <label class="form-check-label" for="check-orgao">
                                        Não sei qual é o órgão responsável
                                    </label>
                                </div>
                            </div>
                            <label for="assunto" class="form-label">Assunto</label>
                            <div class="col-12 col-xl-6 mb-2">
                                <select class="form-select" aria-label="Default select example" id="select-assunto">
                                    <option selected>Selecione uma opção</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-12 col-xl-6 mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="check-assunto">
                                    <label class="form-check-label" for="check-assunto">
                                        Não sei informar o assunto
                                    </label>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="descircao" class="form-label">Descrição</label>
                                <textarea class="form-control" id="descricao" style="height: 100px"
                                    required></textarea>
                                <div id="descricaoHelp" class="form-text text-tiny">Descreva sua manifestação com o
                                    máximo possível de
                                    detalhes. Não há limites de caracteres. Para garantia do anonimato,
                                    certifique-se de
                                    que na descrição da manifestação não contém informações pessoais ou elementos
                                    que
                                    venham a identificá-lo.</div>
                            </div>
                            <div class="col-12 mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"
                                        required>
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Li e estou de acordo com o <a href="">Termo de Uso</a> e <a href="">Política
                                            de
                                            Privacidade.</a>
                                    </label>
                                </div>
                            </div>

                            <div class="g-recaptcha d-flex justify-content-center mb-4" data-sitekey="SUA_SITE_KEY">
                            </div>

                            <button type="submit" class="btn btn-success col-10 col-lg-6 col-xl-3 mx-auto">Registrar
                                manifestação</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

</main>
@endsection

{{-- Css específico para a página --}}
@push('css')
@endpush

{{-- Scripts JS específico para a página --}}
@push('js')
    <!-- Desabilita Select -->
    <script src="js/script.js"></script>
    <script>
        desabledSelect('check-orgao', 'select-orgao');
        desabledSelect('check-assunto', 'select-assunto');
    </script>

    <script>
        $('#telefone').mask('(00) 0000-0000');
    </script>
@endpush
