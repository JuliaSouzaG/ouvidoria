
{{-- Conteúdo que vai ser herdado e servir como modelo --}}
@extends('site.base_site')

{{-- Altera o título da página (Que fica na aba do navegador) --}}
@section('title', 'Título da página')

{{-- Conteúdo da página em si --}}
@section('content')
@endsection

{{-- Css específico para a página --}}
@push('css')
@endpush

{{-- Scripts JS específico para a página --}}
@push('js')
@endpush
