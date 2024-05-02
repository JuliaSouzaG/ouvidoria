@extends('site.base_site')

@section('title', 'Início')

@section('content')
    <main class="p-3 mt-3">
        <div class="titulo text-center mb-5">
            <img src="img/logo_ouvidoria-sem_fundo.png" alt="" class="mb-2 logo-home">
            <h3>Ouvidoria Geral do Estado do Amazonas</h3>
            <hr class="w-50 mx-auto">
        </div>

        <div class="container d-flex justify-content-between align-items-center flex-wrap mb-5"> {{-- w-75 --}}
            <div class="bg-dark-blue text-light text-center p-3 rounded-4 container-size">
                <p class="mt-4"><b>Conheça também o Fala.Br</b></p>
                <p class="mb-5">Plataforma Integrada de Ouvidoria e Acesso à Informação</p>
                <img src="img/falabr-icon.svg" alt="" class="mb-5"><br>
                <a href="https://falabr.cgu.gov.br/web/home" class="btn btn-success mb-4">Clique aqui e acesse</a>
            </div>

            <div class="bg-dark-blue text-light text-center p-3 rounded-4 container-size">
                <p class="mt-2"><b>Área do cidadão</b></p>
                <p>Acesse uma das opções para fazer, Reclamações, Denúncias Anônimas, Sugestões, Solicitações ou
                    Elogios. </p>
                <div class="row col-12 col-md-4 mx-auto mb-2">
                    <a href="{{ route('reclamacoes') }}" class="btn btn-success mb-3">Reclamação</a>
                    <a href="{{ route('denuncias') }}" class="btn btn-success mb-3">Denúncia</a>
                    <a href="{{ route('sugestoes') }}" class="btn btn-success mb-3">Sugestão</a>
                    <a href="{{ route('solicitacoes') }}" class="btn btn-success mb-3">Solicitação</a>
                    <a href="{{ route('elogios') }}" class="btn btn-success mb-3">Elogio</a>
                </div>

            </div>
        </div>

    </main>
@endsection
